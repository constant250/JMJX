// import selectize from 'selectize';

$(document).ready(function () {
    var data;
    var cntrl;
    var counter = 0;
    var dataArr = [];
    var UnitArr = window.unit_extension ? $.parseJSON(window.unit_extension) : [];

    if(window.unit_extension){
        $.each(UnitArr, function(k,v){
            dataArr.push(v.course_unit);
        });
    }

    if($('[name=course_extension]').val() != '' && $('[name=course_id]').val() != ''){
        cntrl = getUnits($('[name=course_id]').val(), $('[name=course_extension]').val(), cntrl);
    }

    $('[name=course_id], [name=course_extension]').on('change', function(){
        var course_id = $('[name=course_id]').val();
        var method = $('[name=course_extension]').val();

        $("#course_unit").attr('readonly','');
        $("#unit_fee").attr('readonly','');

        if(course_id != '' && method != ''){
            cntrl = getUnits(course_id, method, cntrl);
        }
    });

    $("#addrow").on("click", function () {
        if($.inArray($('#course_unit').val(), dataArr) == -1){
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" readonly class="form-control course_unit" value="'+$('#course_unit').val()+'" name="course_unit' + counter + '"/></td>';
            cols += '<td><input type="text" readonly class="form-control unit_fee" value="'+$('#unit_fee').val()+'" name="unit_fee' + counter + '"/></td>';

            cols += '<td class="text-center"><a class="ibtnDel btn text-danger" data="'+$('#course_unit').val()+'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++; 
            dataArr.push($('#course_unit').val());
            UnitArr.push({'course_unit':$('#course_unit').val(), 'unit_fee':$('#unit_fee').val()})
            // console.log(UnitArr);

            $('[name=unit_extension]').val(JSON.stringify(UnitArr));
            // console.log(JSON.stringify(UnitArr));

        }else{
            // alert('Course unit already existed!');
            alertify.alert('Opps...', 'Course unit already existed!');
        }
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove(); 
        var c = $(this).attr('data');

        dataArr = $.grep(dataArr, function(value){
            return value != c;
        });

        // console.log(dataArr);

        $.each(UnitArr, function(k,v){
            if(v.course_unit == c){
                UnitArr.splice(k,1);
                return false;
            }
        });
        $('[name=unit_extension]').val(JSON.stringify(UnitArr));
        // console.log(JSON.stringify(UnitArr));
        counter -= 1
    });
});

function getUnits(course_id, method, control)
{
    if(control != null){
        control.destroy();
    }

    var req = $.ajax({
        url: "/credit-extra/"+course_id+"/method/"+method,
        type: "GET",
        async: false,
        success: function(result){
            var r = $.parseJSON(result);
            console.log(r.length);
            // console.log(control);
            

            $("#course_unit").removeAttr('readonly');
            $("#unit_fee").removeAttr('readonly');

            $('#course_unit').selectize({
                valueField: 'code',
                create:false,
                labelField: 'description',
                maxItems: 1,
                searchField: ['code','description'],
                options: r,
                render: {
                    option: function(item, escape){
                        return '<div> '+ escape(item.code) +' -' + escape(item.description) + '</div>';
                    },
                    item: function(item, escape){
                        return '<div> '+ escape(item.code) +' -' + escape(item.description) + '</div>';
                    },

                }
            });

            // console.log($("#course_unit")[0].selectize);

            control = $("#course_unit")[0].selectize;

        }
    });
    // console.log(req.success());
    return control;
}