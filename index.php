<?php
include "COMPONENT/DB/connection.php";
include "COMPONENT/header.php";
?>
<div class="p-7 m-7 rounded-lg bg-blue-500">
  <div class="mb-5"><p class="text-lg font-medium text-xs leading-tight uppercase text-white mb-7">ANISHOLDINGS SDN.BHD</p></div>
    <a class="p-3 font-medium text-xs leading-tight uppercase bg-green-500 text-white rounded-lg" href="tambahpekerja.php">Add</a>
    <a class="p-3 font-medium text-xs leading-tight uppercase bg-green-500 text-white rounded-lg" href="log.php">Logout</a>
</div>
<center><p class="text-white">PEKERJA LIST</p></center>
<div class="px-8 pb-6 mt-4 flex flex-col ">
  <div class=" sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded-lg">
        <table class="min-w-full text-center">
          <thead class="border-b bg-blue-500">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              NAMA PEKERJA
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO KP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO HP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                JANTINA
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <?php
            $data = mysqli_query($con, "SELECT * FROM info_pekerja");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr class="bg-green-400 border-b">
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["id"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["nama_pekerja"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <?php echo $info["no_kp"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <?php echo $info["no_hp"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["jantina"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <div class="flex space-x-2 justify-center">
                <button type="button" class="inline-block px-6 py-2.5 bg-green-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"><a href="kemaskinipekerja.php?update_id=<?php echo $info["id"]; ?>">Kemas Kini</a></button>
                <button type="button" data-modal-toggle="staticModal" class="inline-block px-6 py-2.5 bg-black-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-black-700 hover:shadow-lg focus:bg-black-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-black-800 active:shadow-lg transition duration-150 ease-in-out">Padam</button>
                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-2xl h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-green-700">
            <div class="flex justify-between items-start p-4 rounded-t bg-red-700 border-b dark:border-blue-600">
                <h3 class="text-xl font-semibold text-white">
                    DELETE!
                </h3>
                <button type="button" class="text-blue-400 bg-transparent hover:bg-blue-200 hover:text-blue-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-blue-600 dark:hover:text-white" data-modal-toggle="staticModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-blue-500 dark:text-blue-400">
                    Adakah anda pasti untuk menghapuskan rekod ini? <p class="text-red-300">Sila pastikan dengan betul!</p> 
                </p>
            </div>
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-blue-200 dark:border-blue-600">
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="padampekerja.php?delete_id=<?php echo $info["id"]; ?>">YES DELETE!</a></button>
                <button data-modal-toggle="staticModal" type="button" class="text-blue-500 bg-white hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">CANCEL</button>
            </div>
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include "COMPONENT/footer.php"; ?>