$(document).ready(function() {
    // Handle delete user
    var userDel;
    $('.usr-delete-btn').click((e) => {
        userDel = e.target.href;
        e.preventDefault();
    });
    $('.usr-confirm-btn').click((e) => {
        window.location.replace(userDel);
    })

    // Handle delete comment (feedback)
    var cmtDel;
    $('.cmt-delete-btn').click((e) => {
        cmtDel = e.target.href;
        e.preventDefault();
    });
    $('.cmt-confirm-btn').click((e) => {
        window.location.replace(cmtDel);
    })
});