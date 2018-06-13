function forImages() {
    let imgs = $(".myImg");
    //alert("loaded")
    let num = 0


    imgs.click(
        function () {

            $("#modal-img").attr("src", this.src);
            $('.modalPlate').css("display", 'block');
            //console.log(imgSrc)

        }
    )

    $(".close").click(
        function () {
            $('.modalPlate').css("display", 'none');
        }
    )

}

forImages()

$("#contactUs").click(function (e) {
    e.preventDefault()
    $('.divCover').show();
})

$('.close-me').click(function () {
    $('.divCover').hide();
})
