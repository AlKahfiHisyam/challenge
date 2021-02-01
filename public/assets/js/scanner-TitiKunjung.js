window.addEventListener('load', function () {
    let selectedDeviceId;
    const codeReader = new ZXing.BrowserMultiFormatReader()
    console.log('ZXing code reader initialized')
    codeReader.listVideoInputDevices()
      .then((videoInputDevices) => {
        const sourceSelect = document.getElementById('sourceSelect')
        selectedDeviceId = videoInputDevices[0].deviceId
        if (videoInputDevices.length >= 1) {
          videoInputDevices.forEach((element) => {
            const sourceOption = document.createElement('option')
            sourceOption.text = element.label
            sourceOption.value = element.deviceId
            sourceSelect.appendChild(sourceOption)
          })
  
          sourceSelect.onchange = () => {
            selectedDeviceId = sourceSelect.value;
          };
  
          const sourceSelectPanel = document.getElementById('sourceSelectPanel')
          sourceSelectPanel.style.display = 'block'
        }
  
        document.getElementById('startButton').addEventListener('click', () => {
          codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
            if (result) {
            $('.modal').modal('hide');
            codeReader.reset()
              console.log(result)
              document.getElementById('result').textContent = result.text
  
              // $(document).ready(function(){
              //   $(document).ajaxSuccess(function(){
              //     alert("AJAX request successfully completed");
              //   });
              //   $("button").click(function(){
              //     $("div").load("demo_ajax_load.txt");
              //   });
              // });
  
              //menambhakan Nama Toko
              
            var id_toko = document.getElementById('result').innerHTML;
            console.log(id_toko);
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
              type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': token
              },
              url: '/Toko/req-nama-toko',
              data: {id : id_toko},
              dataType: 'json',
              success: function(data){
                // console.log(data.NAMA_TOKO);
                // console.log(data.LATITUDE);
                // console.log(data.LONGITUDE);
                // console.log(data.ACCURACY);
                // document.getElementById('nama').val(data.data[0].NAMA_BARANG);
                $('#nama').html(data.data[0].nama_toko);
                $('#lat').html(data.data[0].latitude);
                $('#long').html(data.data[0].longitude);
                $('#acc').html(data.data[0].accuracy);

              }
            });
  
              // selesai
  
            }
            if (err && !(err instanceof ZXing.NotFoundException)) {
              console.error(err)
              document.getElementById('result').textContent = err
            }
          })
          console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
        })
  
        document.getElementById('resetButton').addEventListener('click', () => {
          codeReader.reset()
          document.getElementById('nama').textContent = '';
          document.getElementById('lat').textContent = '';
          document.getElementById('long').textContent = '';
          document.getElementById('acc').textContent = '';
          document.getElementById('result').textContent = '';
          console.log('Reset.')
        })
  
      })
      .catch((err) => {
        console.error(err)
      })
  })
  