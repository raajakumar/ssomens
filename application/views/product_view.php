
<html>
<head>

</head>
<body>

     <h1>Product Details</h1>
<form action="product_controller/save" method="post">
    <table border="2"><tr>
            <td><label>PRODUCT ID</label></td>
            <td>
                <input type="text" name="tb_product_id" id="tb_product_id"
                 readonly value="<?php foreach($product_id as $p_id)
                {
                    echo $p_id['code'];
                }
                ?>">
            </td>
        </tr>
        <tr><td><label>PRODUCT NAME </label></td>
            <td> <input type="text" name="tb_product_name" value="" required=""></td></tr>
        <tr><td><label>PRICE/KG</label></td>
            <td> <input type="text" name="tb_product_price" value="" required=""><br><br></td></tr>
        <tr><td><label>DESCRIPTION</label></td>
            <td>  <input type="text" name="tb_product_description" value=""><br><br></td></tr>
        <tr><td><label>TOTAL STOCK ON HAND</label></td>
            <td> <input type="text" name="tb_product_total_stock" value="" ><br><br></td></tr>
        <tr><td><label>REMARKS</label></td>
            <td><textarea name="tb_product_remarks" value=""></textarea></td></tr>
        <tr><td><input type="submit" name="submit" value="Save"></td></tr>
    </table>
</form>
</body>

</html>
