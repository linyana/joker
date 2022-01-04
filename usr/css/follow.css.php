<?php header("Content-type: text/css; charset: UTF-8"); ?>

/* 个人中心内容 */
.portrait {
    position: relative;
    width: 100%;
    height: 200px;
}

.portrait .head_portrait {
    cursor: pointer;
    position: absolute;
    top: 10px;
    left: 50%;
    margin-left: -90px;
    width: 180px;
    height: 180px;
    border-radius: 90px;
    background-size: 100% 100%;
}

.personal_nav {
    margin-top: 10px;
    width: 100%;
    height: 65px;
    background-color: #3a3939;
}

.personal_li {
    cursor: pointer;
    display: inline-block;
    width: 19.622%;
    height: 100%;
    text-align: center;
    line-height: 2.2em;
    font-size: 1.8em;
    color: rgb(206, 205, 205);
}

.personal_li:hover {
    background-color: #302e2e;
    color: rgb(145, 141, 141);
}

.personal_content {
    width: 100%;
}

.personal_content .personal_card {
    margin-top: 40px;
    width: 100%;
    height: 250px;
    border-radius: 30px;
    background-color: #3a3939;
}

.personal_content .personal_card .personal_first {
    position: relative;
    width: 100%;
    height: 70px;
}

.personal_content .personal_card .personal_first .personal_img {
    position: absolute;
    top: 15px;
    left: 20px;
    width: 60px;
    height: 60px;
    border-radius: 40px;
    background-image: url(../img/avatar.jpeg);
    background-size: 100% 100%;
}

.personal_content .personal_card .personal_first .personal_id {
    position: absolute;
    top: 10px;
    left: 100px;
    font-size: 1.8em;
    color: rgb(206, 205, 205);
}

.personal_content .personal_card .personal_first .personal_time {
    position: absolute;
    top: 50px;
    left: 100px;
    font-size: 1em;
    color: rgb(206, 205, 205);
}

.personal_content .personal_card .personal_first .personal_delete {
    cursor: pointer;
    position: absolute;
    top: 15px;
    left: 900px;
    font-size: 1.2em;
    color: rgb(206, 205, 205);
}

.personal_content .personal_card .personal_first .personal_delete:hover {
    color: rgb(146, 142, 142);
}

.personal_content .personal_card .personal_center {
    margin-left: 5%;
    margin-top: 10px;
    width: 90%;
    height: 135px;
}

.personal_content .personal_card .personal_center p {
    text-indent: 2em;
    font-size: 1em;
    color: rgb(206, 205, 205);
}

.personal_content .personal_card .personal_last {
    width: 100%;
    height: 30px;
}

.personal_content .personal_card .personal_last .action {
    position: relative;
    margin-left: 30px;
    display: inline-block;
    width: 100px;
    height: 30px;
}

.personal_content .personal_card .personal_last .action:nth-child(1) {
    margin-left: 450px;
}

.personal_content .personal_card .personal_last .action .action_img {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-size: 100% 100%;
}

.personal_content .personal_card .personal_last .action .forward {
    background-image: url(../img/recomment.png);
}

.personal_content .personal_card .personal_last .action .comment {
    background-image: url(../img/comment.png);
}

.personal_content .personal_card .personal_last .action .collection {
    width: 23px;
    height: 23px;
    background-image: url(../img/collection.png);
}

.personal_content .personal_card .personal_last .action .like {
    background-image: url(../img/like.png);
}

.personal_content .personal_card .personal_last .action .action_text {
    position: absolute;
    right: 0;
    top: 10px;
    margin-left: 5px;
    display: inline-block;
    width: 50px;
    height: 20px;
    font-size: 1em;
    line-height: 0.01em;
    color: rgb(206, 205, 205);
}

#text1 {
    top: 13px;
}


/* 个人中心导航栏内容2 */

.personal_card2 {
    position: relative;
    margin-top: 5px;
    width: 100%;
    height: 80px;
    background-color: #3a3939;
}

.personal_content2 .personal_img2 {
    position: absolute;
    top: 15px;
    left: 20px;
    width: 50px;
    height: 50px;
    border: 1px solid #242424;
    border-radius: 25px;
    background-size: 100% 100%;
}

.personal_content2 .personal_name2 {
    position: absolute;
    top: 21px;
    left: 100px;
    font-size: 1.7em;
    color: rgb(206, 205, 205);
}

.personal_content2 button.attention {
    position: absolute;
    top: 21px;
    right: 50px;
    width: 80px;
    height: 36px;
    border: 1px solid #242424;
    border-radius: 10px;
    background-color: rgb(219, 219, 219);
}

.personal_content2 button.attention:hover {
    background-color: rgb(206, 205, 205);
}
