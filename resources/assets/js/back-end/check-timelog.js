// import $ from 'jquery';
import alertify from 'alertifyjs';
import axios from 'axios';

$('#ch-tl').on('click', function(e){
  var tl_process = $(this);
  e.preventDefault();
  axios.get('/timelog/check-user')
  .then( response => {
    console.log(response.data);
    if(response.data == 0){
      alertify.alert('Opps..', 'Your account does not have time-log feature.');
    }else{
      window.location = "/timelog";
    }
  })
  .catch( error => {
    // console.log(error.response);
    console.log(error.message);
    console.log(error);
  });
});


