var num = 0;
$('#startButton').click(function(){
    $('#text').html(num + 1 + '問目 Shigeru? or Night?');
    num++;
    $(this).css('display', 'none');
    $('#nightButton').css('display', '');
    $('#shigeruButton').css('display', '');
    setRandomImgSize();
});

$('.ctlButton').click(function(){
    if (num < 5) {
        $('#text').html('正解は。。。');
        $('#nightButton').css('display', 'none');
        $('#shigeruButton').css('display', 'none');
        $('#theAnswerIs').css('display', '');
        $("#questionImg").animate({ 
            width: "300px",
            height: "450px",
            marginLeft: "0px",
            marginTop: "0px"
        }, 1500, function(){
            $('#text').html(num + 1 + '問目 Shigeru? or Night?');
            $('#theAnswerIs').css('display', 'none');
            $('#nightButton').css('display', '');
            $('#shigeruButton').css('display', '');
            setRandomImgSize();
            num++;
        });
    } else if (num === 5) {
        $('#text').html('ツイートしよう');
        $('#nightButton').css('display', 'none');
        $('#shigeruButton').css('display', 'none');
        $('#tweetButton').css('display', '');
    }
});

$('#tweetButton').click(function(){
    postTwitter();
});

function setRandomImgSize()
{
    $('#questionImg').css('margin-left', -100 + 'px');
    $('#questionImg').css('margin-top', -100 + 'px');
    $('#questionImg').css('width', '900px');
    $('#questionImg').css('height', '1350px');
}

function postTwitter()
{
    console.log('postTwitter');
}
