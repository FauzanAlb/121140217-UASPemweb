  <?php
	class User
	{

		private $pdo;

		function __construct()
		{
			try {
				$this->pdo = new PDO('mysql:host=localhost;dbname=uas_pemweb', 'root', '');
			} catch (PDOException $e) {
				echo $e;
			}
		}

		public function hitungUser()
		{
			$sql = "SELECT * FROM tuser WHERE  role=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute(['user']);
			$count = $stmt->rowCount();
			return $count;
		}

		public function checkEmail($email)
		{
			$sql = "SELECT * FROM tuser WHERE  email_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$email]);
			$count = $stmt->rowCount();
			if ($count > 0) {
				return 1;
			} else {
				return 0;
			}
		}

		public function tambahUser($nama, $email, $telp, $pass, $tgl_lahir, $alamat ,$jk)
		{
			$sql = "INSERT INTO tuser (nama_user,email_user,telp_user,pass_user,role,tgl_lahir, alamat,jk, setujui) VALUES(?,?,?,?,?,?,?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama, $email, $telp, $pass, 'user', $tgl_lahir, $alamat, $jk , 0
			]);
		}

		public function setujui($id)
		{
			$sql = "UPDATE tuser SET setujui=? WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				1, $id
			]);
			return 1;
		}

		public function tampilUser()
		{
			$sql = "SELECT * FROM tuser WHERE role='user'";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}
		public function login($email)
		{
			$sql = "SELECT * FROM tuser WHERE email_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$email]);
			$data = $stmt->fetch();
			return $data;
		}

		public function tampilUserById($id)
		{
			$sql = "SELECT * FROM tuser WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
			$data = $stmt->fetch();
			return $data;
		}

		public function hapusUser($id)
		{
			$sql = "DELETE FROM tuser WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
		}

		public function updateUser($id, $nama, $telp, $pass, $foto)
		{
			$sql = "UPDATE tuser SET nama_user=?,
                    telp_user=?,
										pass_user=?,
										foto_user=?
										WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama, $telp, $pass, $foto, $id
			]);
			return 1;
		}

		public function updateUserBio($id, $nama, $tgl_lahir, $telp, $jk, $alamat)
		{
			$sql = "UPDATE tuser SET nama_user=?,
                    				tgl_lahir=?,
									telp_user=?,
									jk=?,
									alamat=?
										WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama, $tgl_lahir, $telp, $jk, $alamat, $id
			]);
			return 1;
		}

		public function updateUserPass($id, $pass)
		{
			$sql = "UPDATE tuser SET pass_user=?
                    WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$pass, $id
			]);
			return 1;
		}

	}





	?>
