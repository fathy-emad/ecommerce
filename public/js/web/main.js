$('[socialAuth]').on("click", function () {
    let social = $(this).attr('socialAuth');

    var aTag = document.createElement('a');
    aTag.setAttribute('href',"auth/redirect/" + social);
    aTag.click();


});
