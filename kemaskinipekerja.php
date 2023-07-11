<?php
include "COMPONENT/DB/connection.php";
include "COMPONENT/header.php";
$ID = $_GET["update_id"];
if (isset($_POST["update"])) {
    $IC = $_POST["IC"];
    $NAMA = $_POST["NAMA"];
    $HP = $_POST["HP"];
    $JANTINA = $_POST["JANTINA"];
    $result = mysqli_query(
        $con,
        "UPDATE info_pekerja SET nama_pekerja='$NAMA',no_kp='$IC', no_hp='$HP', jantina='$JANTINA' WHERE id='$ID'"
    );
    if ($result) { ?>
            <main x-data="app">
              <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
                <div class="flex items-center space-x-2">
                  <span class="text-3xl"><i class="bx bx-check"></i></span>
                  <p class="font-bold">Berjaya!</p>
                </div>
              </button>
            </main>
                <?php } else { ?>
    <main x-data="app">
      <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-red-500 px-4 py-2 text-white transition hover:bg-red-600">
        <div class="flex items-center space-x-2">
          <span class="text-3xl"><i class="bx bx-x"></i></span>
          <p class="font-bold">Gagal</p>
        </div>
      </button>
    </main>
        <?php }
}
?>
<div class="p-7 m-7 rounded-lg bg-blue">
    <a class="p-3 bg-blue-500 text-white rounded-lg" href="index.php">Kembali</a>
</div>
<?php
$result = mysqli_query($con, "SELECT * FROM info_pekerja WHERE id='$ID'");
while ($res = mysqli_fetch_array($result)) {
    $NAME = $res["nama_pekerja"];
    $IC = $res["no_kp"];
    $HP = $res["no_hp"];
    $JANTINA = $res["jantina"];
}
?>
<div class=" items-center justify-center bg-blue-500">
    <div class="px-8 py-6 text-left bg-blue shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold">Kemas kini MAKLUMAT <?php echo $NAME; ?></h3>
        <form method="post" enctype='multipart/form-data'>
            <div class="mt-4">
            <div class="mt-4">
                <label class="block">IC</label>
                <input maxlength="12" name="IC" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" value="<?php echo $IC; ?>">  
                </div>
                <div class="mt-4">
                <label class="block">Nama</label>
                <input name="NAMA" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"  value="<?php echo $NAME; ?>">  
                </div>
                <label class="block">HP</label>
                <input name="HP" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"  value="<?php echo $HP; ?>">  
                </div>
                <div class="mt-4">
                <label class="block">Jantina</label>
                <select class="form-select appearance-none block w-full px-3 mt-2 py-1.5 text-base font-normal text-blue-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-blue-300 rounded transition ease-in-out m-0 focus:text-blue-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="JANTINA" required>
                <option disabled selected value> -- Jantina -- </option>  
                <option value="Lelaki">Lelaki</option>
                  <option value="Perempuan">Perempuan</option>
      </select>  
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="submit" name="update" class="px-6 py-2 mt-4 text-white bg-green-600 rounded-lg hover:bg-green-900">Update</button>
                    <button type="reset"><a class="text-sm text-blue-600 hover:underline">Clear</a></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "COMPONENT/footer.php"; ?>
