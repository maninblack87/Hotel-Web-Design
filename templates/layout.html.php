<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<link rel="stylesheet" href="css/hotel.css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/hotel.js"></script>
</head>

<body>
    
    
    <!--헤더-->
    <div id="header">
        
        
        <!--계정관리-->
        <div id="hd1">
        
        	<div id="container">
            
            	<div id="account">

                    <!-- 로그인 상태일때 -->
					<?php if(isset($_SESSION['uid'])){ ?>
                    <div id="acc1"><?=$_SESSION['uid']?>님 환영합니다!</div>
                    <div id="acc2"><a class="link" href="logout.php">로그아웃</a></div>

                    <!-- 로그아웃 상태일때 -->
                    <?php }else{ ?>
                    <div id="acc1"><a class="link" href="join.php">회원가입</a></div>
                    <div id="acc2"><a class="link" href="login.php">로그인</a></div>
					<?php } ?>

                </div>
            
            </div>
        
        </div>
    
    	
        <!--로고, 카테고리-->
        <div id="hd2">
        
        	<div id="container">
            
            	<div id="logo"><a href="index.php"><img class="link" src="img/logo.png" alt="logo" title="그랜드힐스턴호텔 로고"></a></div>
        
                <div id="info">
                
                    <ul>
                        <!-- 주소 -->
                        <li>주소: 전북 전주시 완산구 서곡100길 100-10, (우편번호) 12345</li>
                        <!-- 연락처 -->
                        <li>전화: 070-1234-5678</li>
                        <!-- 평점 -->
                        <li>평점: 4.5점</li>
                    </ul>
                    
                </div>
            
            </div>
        
        </div>
        
        
    </div>
    
    
    <div id="main">
    
    	<?=$output?>
    
    </div>
    
    
    <div id="footer">
    
    	<div id="container">
        
        	<!--로고-->
        	<div id="ft1">
        
                <div id="logo"><img src="img/logo.png" alt="logo" title="그랜드힐스턴호텔 로고"></div>
            
            </div>
            
        	<!--홈페이지 정보, 카피라이트-->
            <div id="ft2">
            
                <ul id="info">
                    <li>대표자 : 전석환 | </li>
                    <li>연락처 : 032-1234-5678 | </li>
                    <li>모바일 : 010-1234-5678 | </li>
                    <li>이메일 : abcd1234@naver.com | </li>
                    <li>주소 : 인천광역시 미추홀구 123번길 45</li>
                </ul>
                
                <ul id="copyright">
                    <li><?=date("Y")?> 그랜드힐스턴호텔 ⓒ all rights reserved</li>
                </ul>
            
            </div>
            
        
        </div>
    
    </div>
    

</body>
</html>