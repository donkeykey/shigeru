var num = 0;
var point = 0;
var answerArray = new Array("shigeru", "night", "shigeru", "shigeru", "night");

$('#startButton').click(function(){
    $("#questionImg").attr("src","./img/questionImg/question" + (num + 1) + ".png");
    $('#text').html(num + 1 + '問目 Shigeru? or Night?');
    num++;
    $(this).css('display', 'none');
    $('.title').css('display', 'none');
    $('#nightButton').css('display', '');
    $('#shigeruButton').css('display', '');
    setRandomImgSize();
});

$('.ctlButton').click(function(){
    // 特典加算部分
    if (($(this).attr('id') == 'shigeruButton' && answerArray[num - 1] === "shigeru") || ($(this).attr('id') == 'nightButton' && answerArray[num - 1] === "night")) {
        point++;
    }
    // 表示制御
    if (num <= 5) {
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
            $('#theAnswerIs').css('display', 'none');
            if (num === 5) {
                $('#nextButton').css('display', 'none');
                if (answerArray[num - 1] === "shigeru") {
                    $('#text').html('しげるでした。' + point + '問正解！正解をツイートしよう！');
                } else {
                    $('#text').html('夜でした。' + point + '問正解！正解をツイートしよう！');
                }
                $('#nightButton').css('display', 'none');
                $('#shigeruButton').css('display', 'none');
                $('#tweetButton').css('display', '');
            } else {
                if (answerArray[num - 1] === "shigeru") {
                    $('#text').html('しげるでした');
                } else {
                    $('#text').html('夜でした');
                }
                $('#nextButton').css('display', '');
            }
        });
    }
});

$('#nextButton').click(function(){
    $("#questionImg").attr("src","./img/questionImg/question" + (num + 1) + ".png");
    $('#nextButton').css('display', 'none');
    $('#text').html(num + 1 + '問目 Shigeru? or Night?');
    $('#theAnswerIs').css('display', 'none');
    $('#nightButton').css('display', '');
    $('#shigeruButton').css('display', '');
    setRandomImgSize();
    num++;
});

$('#tweetButton').click(function(){
    postTwitter();
});

function setRandomImgSize()
{
    $('#questionImg').css('margin-left', -100 + 'px');
    $('#questionImg').css('margin-top', -100 + 'px');
    /* org
    $('#questionImg').css('width', '900px');
    $('#questionImg').css('height', '1350px');
    */
    $('#questionImg').css('width', '1900px');
    $('#questionImg').css('height', '2350px');
}

//function postTwitter()
//{
//    console.log('postTwitter');
//    txt = point  + "問正解しました。";
//    var url = "http://twitter.com/share?url=http://fukase-no-owari.net&text=" + txt;
//    location.href = url;
//}
function postTwitter()
{
    console.log('postTwitter');
    txt = "【SHIGERU or NIGHT | 夜かと思ったら松崎しげるだった】" + "正解数は君の心のなかにある!"+ "#9月6日(クロ)"+"#松崎しげるの日";
    /*urlencode(txt);*/
    encodeURIComponent(txt);
    var url = "http://twitter.com/share?url=http://shigeru-or-night.com&text=" + txt;
    location.href = url;
}
