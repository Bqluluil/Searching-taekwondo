<?php 
session_start();
 $command = @$_POST['command'];
 if(!empty($command))
 {
 	if(preg_match('~hallo~', $command))
 	{
 	echo 'hai';

}else if(preg_match('~Taekwondo~', $command))
 {
 	echo 'Tae Kwon Do atau Taekwon-Do adalah bentuk seni bela diri Korea, yang ditandai dengan teknik meninju dan menendang, dengan penekanan pada tendangan setinggi kepala, tendangan melompat berputar, dan teknik tendangan cepat.';
}else if(preg_match('~Tempat Latihan~', $command))
 {
 	echo 'Salah satu tempat terbaik untuk latihan Taekwon-Do adalah Jl. Jend. Sudirman No.17, Rembiga, Kec. Selaparang, Kota Mataram, Nusa Tenggara.';

 }else if(preg_match('~siapa nama kamu~', $command))
 {
 	echo 'namaku lulu';
}else if(preg_match('~siapa aku~', $command))
 {
 	echo 'kamu adalah manusia';
 }else if(preg_match('~namaku~', $command))
 {
 	$nama =str_replace('namaku', '', $command);
 	if(!empty($nama))
 	{
 		$_SESSION['nama'] = $nama;
 	}
 	echo'ok,aku akan mengingatnya',@$_SESSION['nama'];
 }
 	else{
 	echo 'maaf aku tidak mengerti apa yang kamu maksud !';
 }
}
