'use strict';
import axios from 'axios';
import sortablejs from 'sortablejs';

$(document).ready(function(){
	var list = document.querySelectorAll('.dd_container');
	var sortables = [];

	for(var i = 0; i<list.length; i++ ){
		var sortInstance = sortablejs.create(list[i],{
			group:{
				name:"taskboard-list-2",
				pull:true,
				put:true,
			},
			animation:250,
			draggable:".dd_dragable",
			onEnd:function(evt){
				var task_id = $(evt.item).data('task');
				var column_id_to  = $(evt.to).data('column_id');
				var prj_id  = $(evt.to).data('prj');
				var column_id_from  = $(evt.from).data('column_id');

				// console.log(column_id_from);
				// console.log(column_id_to);
				if(column_id_to != column_id_from){
					axios.get(`/move_task/${task_id}/${column_id_to}/${prj_id}`
					).then( (response)=>{
						// 
						console.log( response );
					} ).catch( (error)=>{
						alert('something went wrong');
						console.log(error);

					})
				}
				

				// axios.get('/taskboard/move_column/move')
				// .then( (response)=>{
				// 	console.log(response);
				// } ).catch( (error)=>{
				// 	console.log(error);
				// } )

				// console.log(evt.to);
				// console.log(evt.from);
			}
		});

		sortables.push(sortInstance);
	}

	console.log(sortables);
	
});
