 $(document).ready(function(){
        $("#angka").keyup(function(){
          // console.log("berhasil")
          $(this).maskNumber({integer: true, thousands: "."})
        });
      });