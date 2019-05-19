function updateBlog(){
    const form = document.getElementById("updateForm");
    Swal.fire({
      title: 'Are you sure?',
      text: "You want update this blog",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Update it!'
    }).then((result) => {
      if (result.value) {
        form.submit();
        Swal.fire(
          '',
          'Request Submited',
          ''

        )
      }
    });
  }

function deleteBlog(blogid){
  
    Swal.fire({
      title: 'Are you sure?',
      text: "You want be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "delete/"+blogid;
        Swal.fire(
          '',
          'Request Submited',
          ''

        )
      }
    });
  }


function saveComment(){
const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
const comment = $("#commentmessage").val(); 
const blogid = $("#blogId").val(); 
const user_name = $("#username").val(); 
const userid = $("#userCommentID").val(); 
const hr = new XMLHttpRequest();
const url = "comment";
   const vars = "_token="+CSRF_TOKEN+"&user_id="+userid+"&blog_id="+blogid+"&description="+comment;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        let return_data = JSON.parse(hr.responseText);
        //console.log(return_data);
        if(return_data.description){
          $("#commentList").append('<li class="comment"><div class="vcard"><img src="../blog_images/person_1.jpg" ></div><div class="comment-body"><h3>'+user_name+'</h3><div class="meta">2 seconds agao</div><p>'+return_data.description+'</p></div></li>');
           $("#commentmessage").val('');
           $('#saveMessage').html('');
        }
       
      }  
    }

    if(comment==null || comment=="" || comment==" "){
       $('#saveMessage').html("<label style='color:#F00; padding:4px; background-color:#FFF; '>Comment can not be Empty.</label>");
    }else{
       hr.send(vars); 
     $('#saveMessage').html("<label style='color:#5cb85c;'>posting comment....</label>");
    }
    
}
//http://localhost/suleiman/blog_ukrian/public/blog/comment/delete
function deleteComment(id){
const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 
const hr = new XMLHttpRequest();
const url = "comment/delete";
   const vars = "_token="+CSRF_TOKEN+"&comment_id="+id;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        let return_data = JSON.parse(hr.responseText);
        //console.log(return_data);
        let total_comment = $('#numComments').html();
        total_comment = parseInt(total_comment);
        total_comment -= 1;
        $('#numComments').html(total_comment)
         $('#commentItem'+id).html('');
       
      }

    }
    hr.send(vars); 
   $('#deleteMessagebnt'+id).html("<label style='color:#5cb85c;'>deleting...</label>");
    
}