<?php

$dataFile='bbs.dat';

function h($S){
	return htmlspecialchars($S,ENT_QUOTES,'UTF-8');
}


if ($_SERVER ['REQUEST_METHOD']=='POST'&&
	 isset($_POST['message'])&&
	 isset($_POST['user'])){


	$message=trim($_POST['message']);
	$user=trim($_POST['user']);

	if($message !==''){

		$user=($user=='')? '名無しさん ' : $user;

		$message=str_replace("\t", ' ', $message);
		$user=str_replace("\t", ' ', $user);
		
		$postedAt=date('Y-m-d H:i:s');

		$newData = $message."\t".$user. "\t".$postedAt. "\n";

		$fp=fopen($dataFile,'a');
		fwrite($fp,$newData);
		fclose($fp);


		}
	}

	$posts=file($dataFile,FILE_IGNORE_NEW_LINES);

	$posts=array_reverse($posts);



?>
<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="utf-8">
		<title>掲示板</title>
	</head>
	<body>
		<h1>掲示板</h1>
			<form acction="" method="post">
			メッセージ:<input type="text" name="message">
			ユーザー:<input type="text" name="user">
			<input type="submit" value="投稿">
			</form>

		<h2>投稿一覧(<?php echo count($posts);?>件)</h2>
		<ul>
			<?php if (count($posts)) : ?>
					<?php  foreach($posts as $post) : ?>
					<?php  list($message,$user,$postedAt)=explode("\t",$post);?>
						<li><?php echo h($message);?>  <?php echo h($user);?> - <?php echo h($postedAt);?></li>

					<?php  endforeach; ?>
				<?php else : ?>

			<li>まだ投稿はありません。</li>
			<?php endif ; ?>			
		</ul>
	</body>
</html>