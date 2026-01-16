function checkImg(imagePath, targetSelector) {
    if (!imagePath) {
        $(targetSelector).attr('src', '../home/img/noimg.png');
    } else {
        $(targetSelector).attr('src', "../" + imagePath);
    }
}


function handleIsActiveChange(edit_id, is_active, url) {
    console.log("url : ",url);
    $.ajax({
        type: "POST",
        url: appUrl + "/" + url,
        data: {
            _token: _token,
            is_active: is_active,
            edit_id: edit_id,
        },
        success: function (response) {
            if (is_active === 1) {
                console.log("Active User");
                location.reload();
            } else {
                console.log("Deactive User");
                location.reload();

            }
        }
    });
}

function handleIsFeeActiveChange(edit_id, is_active, url) {
    $.ajax({
        type: "POST",
        url: appUrl + "/" + url,
        data: {
            _token: _token,
            is_active: is_active,
            edit_id: edit_id,
        },
        success: function (response) {
            if (is_active === 1) {
                console.log("Active User");
                location.reload();
            } else {
                console.log("Deactive User");
                location.reload();

            }
        }
    });
}

function handleToDeleteUser(edit_id, is_active, url) {
    $.ajax({
        type: "POST",
        url: appUrl + "/" + url,
        data: {
            _token: _token,
            is_active: is_active,
            edit_id: edit_id,
        },
        success: function (response) {
            if (response.status === 200) {
                location.reload();
            }
            if (response.status === 201) {
                location.reload();
            }
        }
    });
}


function handleViewClick(selector, urlPath, successCallback) {
    $(selector).click(function(e) {
        e.preventDefault();
        const itemId = $(this).attr('student_id');
        $.ajax({
            type: "get",
            url: `${appUrl}/${urlPath}/${itemId}`,
            data: { _token: _token },
            success: function(response) {
                if (response.status == 200 && typeof successCallback === 'function') {
                    successCallback(response);
                }
            }
        });
    });
}

function handleDelete(selector, entityName, redirectUrl = null) {
    $(document).on('click', selector, function(e) {
        e.preventDefault();

        var itemId = $(this).data('id');
        // console.log(itemId);
        var url = `/${entityName}/` + itemId;

        if (confirm('Are you sure you want to delete this ' + entityName + '?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: _token,
                },
                success: function(response) {
                    if (response.success) {
                        alert(entityName.charAt(0).toUpperCase() + entityName.slice(1) + ' deleted successfully');
                        // Reload page or redirect after deletion
                        if (redirectUrl) {
                            window.location.href = redirectUrl;
                        } else {
                            location.reload();
                        }
                    } else {
                        alert('Failed to delete the ' + entityName + ': ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error occurred: ' + error);
                }
            });
        }
    });
}
