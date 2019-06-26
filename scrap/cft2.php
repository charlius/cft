

  <?php 
require 'simple_html_dom.php';
unlink('cookies.txt');
$cookies = getcwd() . "/cookies.txt";
  $handler = curl_init();
curl_setopt($handler, CURLOPT_URL,"http:/alumnosnet.cftsanagustin.cl/ValidaClave.asp?");
curl_setopt($handler, CURLOPT_POST,true);
curl_setopt($handler, CURLOPT_POSTFIELDS, "logrut=".$rut."&logclave=".$pass."");
curl_setopt($handler, CURLOPT_COOKIEJAR,$cookies); // Guardamos la sesión
curl_setopt($handler, CURLOPT_COOKIEFILE,$cookies); // Guardamos la sesión
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handler, CURLOPT_FRESH_CONNECT, true);
curl_setopt($handler, CURLOPT_COOKIESESSION, $cookies); // Guardamos la sesió
 
$response = curl_exec ($handler);
 
curl_close($handler);
 
/* 2ª Página */
 
$url = "http:/alumnosnet.cftsanagustin.cl/concent-notas.asp?";
 
$handler = curl_init();
curl_setopt($handler, CURLOPT_REFERER, utf8_decode($url));
curl_setopt($handler, CURLOPT_URL, $url);
curl_setopt($handler, CURLOPT_POST,true);
curl_setopt($handler, CURLOPT_POSTFIELDS, "logrut=".$rut."&logclave=".$pass."");
curl_setopt($handler, CURLOPT_COOKIEJAR,$cookies); // Usamos la sesión
curl_setopt($handler, CURLOPT_COOKIEFILE,$cookies); // Usamos la sesión
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handler, CURLOPT_FRESH_CONNECT, true);
curl_setopt($handler, CURLOPT_COOKIESESSION, $cookies); // Usamos la sesión

$response = utf8_decode(curl_exec ($handler));
curl_close($handler);
unset($handler);
$html = str_get_html($response);
$h1=$html->find('a[href="MensajesBloqueos.asp"]');
if(is_string($h1)){
	//header("Location: http://localhost/anteriores/scrap/login/index.html");
	
}else{
	//header("Location: http://localhost/anteriores/scrap/login/index.html");
	//header("Location: http://localhost/anteriores/scrap/notas.php?op=2");
	
}
//echo $response;


/*

 @Override
    public void onResponse(JSONObject response) {

            if (response.length() <= 1) {
                Toast.makeText(getContext(), "error en los datos rut o pass", Toast.LENGTH_SHORT).show();
            } else {
                try {
                progreso.hide();
                //Toast.makeText(getContext(),"Mensaje: "+response,Toast.LENGTH_SHORT).show();

                Usuario miUsuario = new Usuario();
                Toast.makeText(getContext(), "Mensaje: " + response.length(), Toast.LENGTH_SHORT).show();
                JSONArray json = response.optJSONArray("ramo3");


                txtNombre.setText(json.optString(1));


                JSONObject jsonObject = null;
                Toast.makeText(getContext(), "Mensaje: " + json, Toast.LENGTH_SHORT).show();
        /*try {
            jsonObject=json.getJSONObject(0);
            Toast.makeText(getContext(),"Mensaje: "+json,Toast.LENGTH_SHORT).show();
           /* miUsuario.setNombre(jsonObject.optString("nombre"));
            miUsuario.setProfesion(jsonObject.optString("profesion"));
            miUsuario.setDato(jsonObject.optString("imagen"));

        } catch (JSONException e) {
            Toast.makeText(getContext(),"Mensaje: error en tru",Toast.LENGTH_SHORT).show();
            e.printStackTrace();
        }

                txtNombre.setText("nombre: " + json.optString(1));
                txtProfesion.setText("nota1 : " + json.optString(4));


                if (miUsuario.getImagen() != null) {
                    campoImagen.setImageBitmap(miUsuario.getImagen());
                } else {
                    campoImagen.setImageResource(R.drawable.img_base);
                }

            }catch(Error error){

            }
        }


    }


*/
 
?>

