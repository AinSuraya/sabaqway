<title>SWK</title>
<style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<center>
  <font size='5'>
    Nama Sistem : Sabaqway Kitchen(SWK)
    <center>
      <form action="login.php" method="post">
        <h1>USER LOGIN</h1>
        <table border="0">
          <tr>
            <th>Username</th>
            <td><input type="text" name="username" placeholder="Please enter username" required></td>
          </tr>
          <tr>
            <th>Password</th>
            <td><input type="password" name="password" placeholder="Please enter password" required></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" name="login" value="LOGIN" />
            </td>
          </tr>
        </table>
      </form>
    </center>
    <br>
    <br>
    <b>Pengguna<br></b>
    <br>
    <b><a href="admin">Majikan </a>(Imran)<br></b>
    Menguruskan senarai product<br>
    Melihat senarai customer<br>
    <br>
    <b><a href="staff">Pekerja</a> (Suraya)<br></b>
    Menguruskan senarai customer<br>
    Melihat senarai order<br>
    <br>
    <b><a href="customer">Pelanggan</a> (Syatirah)<br></b>
    Menguruskan senarai order<br>
    <br>
    <hr>
    <b>DATABASE : swk</b><br>
    Table 1 : admin<br>
    - adminpassword<br>
    <br>
    Table 2 : staff<br>
    - staffpassword<br>
    <br>
    Table 3 : customer<br>
    - idcustomer, username, address, phoneno, email, custpassword<br>
    <br>
    Table 4 : orders<br>
    - idorders, idcustomer, datecreation<br>
    <br>
    Table 5 : ordersdetails<br>
    -idorderdetails, idorders,idproduct,quantity <br>
    <br>
    Table 6 : product<br>
    - idproduct, productname, image, price<br>
    <br>

    TABLE : ADMIN <br>
    <br>
    <table style="width:50%;height:80px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>adminpassword</td>
        <td>varchar(250)</td>
        <td></td>
      </tr>

    </table>

    TABLE : STAFF <br>
    <br>
    <table style="width:50%;height:80px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>staffpassword</td>
        <td>varchar(250)</td>
        <td></td>
      </tr>

    </table>
    TABLE : CUSTOMER <br>
    <br>
    <table style="width:50%;height:100px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>idcustomer</td>
        <td>int</td>
        <td>A_I</td>
      </tr>
      <tr>
        <td>username</td>
        <td>varchar(50)</td>
        <td></td>
      </tr>
      <tr>
        <td>fullname</td>
        <td>varchar(50)</td>
        <td></td>
      </tr>
      <tr>
        <td>address</td>
        <td>varchar(250)</td>
        <td></td>
      </tr>
      <tr>
        <td>email</td>
        <td>varchar(35)</td>
        <td></td>
      </tr>
      <tr>
        <td>custpassword</td>
        <td>varchar(250)</td>
        <td></td>
      </tr>
    </table>
    TABLE : ORDERS <br>
    <br>
    <table style="width:50%;height:100px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>idorders</td>
        <td>int</td>
        <td>PK,A_I</td>
      </tr>
      <tr>
        <td>idcustomer</td>
        <td>int</td>
        <td></td>
      </tr>
      <tr>
        <td>datecreation</td>
        <td>date</td>
        <td></td>
      </tr>
    </table>
    TABLE : ORDERS DETAIL<br>
    <br>
    <table style="width:50%;height:100px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>idorders</td>
        <td>int</td>
        <td>PK,A_I</td>
      </tr>
      <tr>
        <td>idorderdetails</td>
        <td>int</td>
        <td></td>
      </tr>
      <tr>
        <td>idproduct</td>
        <td>int</td>
        <td>FK</td>
      </tr>
      <tr>
        <td>quantity</td>
        <td>int</td>
        <td></td>
      </tr>

    </table>
    TABLE : PRODUCT<br>
    <br>
    <table style="width:50%;height:100px">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Extra</th>
      </tr>
      <tr>
        <td>idproduct</td>
        <td>int</td>
        <td>FK</td>
      </tr>
      <tr>
        <td>productname</td>
        <td>varchar(45)</td>
        <td></td>
      </tr>
      <tr>
        <td>image</td>
        <td>text</td>
        <td></td>
      </tr>
      <tr>
        <td>price</td>
        <td>decimal(7,2)</td>
        <td></td>
      </tr>

    </table>

  </font>
</center>