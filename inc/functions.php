<?php

	function get_projects_portfolio() {

		global $connect;

		$sql = "SELECT * FROM `projects`";
		$result = mysqli_query($connect, $sql);
		$rows = mysqli_fetch_all($result, 1);

		return $rows;

	};

	function get_projects() {

		global $connect;

		$sql = "SELECT * FROM `projects` WHERE `index_show` = 1";
		$result = mysqli_query($connect, $sql);
		$rows = mysqli_fetch_all($result, 1);

		return $rows;

	};

	function get_artist() {

		global $connect;

		$sql = "SELECT * FROM `team`";
		$result = mysqli_query($connect, $sql);
		$rows = mysqli_fetch_all($result, 1);

		return $rows;

	};

?>