$(function() {
    var table=$('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: url_users_list,
        columns: [
            { data: 'id', name: 'posts.id' },
            { data: 'photo', name: 'posts.thumbnail' },
            { data: 'title', name: 'posts.title' },
            { data: 'name', name: 'users.name' },
            { data: 'action', name: 'action' },
        ]
    });
    $(document).on('click', '.btn-danger', function(){
        var user_id= $(this).attr('userId');
        var url=asset+'posts/'+user_id;
        console.log(url);
        $.ajax({
            type:'delete',
            url:url,
            success: function(response){
                table.ajax.reload();
            }
        })
    })
});