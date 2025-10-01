<?php
class SESSION
{

	public function LucasAdminLogado()
	{
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		$name_page = basename($_SERVER['PHP_SELF']);
		if (!isset($_SESSION['infosUsuarioLogadoLucasAdmin'])) {
			if ($name_page != 'index.php') {
				header("Location: " . PATH . "acesso");
				exit();
			}
		}
	}
}
