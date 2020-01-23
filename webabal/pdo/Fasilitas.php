<?php 

    class Fasilitas{
        public function __construct(){
            require "conn.php";     // import file conn.php
            $this->db = $koneksi;   // deklarasi variabel $this->db terkoneksi dengan database
        }

        public function create($id_fasilitas, $nama_fasilitas, $jns_fasilitas, $deskripsi){
            try{
                $query = "INSERT INTO mn_fasilitas VALUES
                ('$id_pelayanan', '$nama_fasilitas','$jns_fasilitas', '$lev_user')";
                $stmt = $this->db->prepare($query);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function read(){
            try{
                $query = "SELECT * FROM mn_fasilitas ORDER BY id_fasilitas ASC";
                $stmt = $this->db->prepare($query);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function update ($id_fasilitas, $nama_fasilitas, $jns_fasilitas, $deskripsi){
            try{
                $query = "UPDATE mn_fasilitas SET 
                nama_fasilitas='$nama_fasilitas', jns_fasilitas='$jns_fasilitas', deskripsi='$deskripsi''
                WHERE id_fasilitas='$id_fasilitas' ";
                $stmt = $this->db->prepare($query);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function delete ($id_fasilitas){
            try {
                $query = "DELETE FROM mn_fasilitas WHERE id_fasilitas='$id_fasilitas' ";
                $stmt = $this->db->prepare($query);
                $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>