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