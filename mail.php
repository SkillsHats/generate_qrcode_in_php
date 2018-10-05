<?php

$con = new mysqli('localhost', 'root', '', 'new_nerdgeeklab');

$query = "SELECT * FROM `TESTS` WHERE TEST_ID = 1";
$result = $con->query($query);
$row = $result->fetch_assoc();
 
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Test Details</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: 'Open Sans', sans-serif;color: #1a1a1a;background-color: #f0f0f0;">
  <div style="display: flex;justify-content: center;align-items: center;height: 100%;width: 100%;z-index: 100; overflow-y: auto;">
    <div style="display: flex;max-width: 675px;min-height: 400px;margin-bottom: 125px;background-color: #ffffff; border-radius: 5px;box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1);">
      <div style="position: relative;flex: 1;min-width: 230px;padding: 20px;overflow: hidden;border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
        <div class="modal__circle" style="position: absolute;top: 0;left: 0;height: 200%;width: 200%;background-color: #fbcf34;border-radius: 0%;-webkit-transform: translateX(-50%) translateY(-25%);transform: translateX(-50%) translateY(-25%);"></div>
        <img style="padding-top:200px;" src="Managed_Support_Top.png" class="modal__product" style="position: absolute;top: 0;left: 50%;max-width: 85%;-webkit-transform: translateX(calc(-50% - 10px));transform: translateX(calc(-50% - 10px));">
      </div>
      <div style="flex: 3;padding: 40px 30px;">
			<div><img src="qrcode.php?text=<?php echo $row['TEST_TITLE'] ?>" alt="QR Code" style="float:right;width:120px;height:120px;"></div><br>
        <h3 style="margin-top:20px;">Your Test Details</h3>
		<br><br>
		<div style="float:left">
        <form method="POST">
          <ul class="form-list" style="padding-left: 0;list-style: none;">
            <li class="form-list__row" style="margin-bottom: 25px;">
              <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 12px;letter-spacing: .5px;color: #939393;">Test Title</label>
              <input type="text" value="<?php echo $row['TEST_TITLE']; ?>" style="width: calc(100% - 10px);min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;">
            </li>
            <li class="form-list__row form-list__row--inline" style="margin-bottom: 25px;;display: flex;justify-content: space-between;">
              <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 12px;letter-spacing: .5px;color: #939393;">Test Question Type</label>
              <input type="text" value="<?php echo $row['TEST_QUESTION_TYPE']; ?>" style="min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;">
            </li>
            <li class="form-list__row form-list__row--inline" style="margin-bottom: 25px;display: flex;justify-content: space-between;">
              <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 12px;letter-spacing: .5px;color: #939393;">Total Time</label>
				<input type="text" value="<?php echo $row['QTIM']; ?>" style="min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;">
			</li>
            <li class="form-list__row form-list__row--inline" style="margin-bottom: 25px;display: flex;justify-content: space-between;">
                <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 11px;letter-spacing: .5px;color: #939393;">+ Marks on each Correct Answer</label>
                <input type="text" value="<?php echo $row['MOCA']; ?>" style="min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;margin-left:10px">
             </li> 
            <li class="form-list__row form-list__row--inline" style="margin-bottom: 25px;display: flex;justify-content: space-between;">
              <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 11px;letter-spacing: .5px;color: #939393;">- Marks on each Correct Answer</label>
              <input type="text" value="<?php echo $row['MOWA']; ?>" style="min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;margin-left:10px">
			</li>
             <li class="form-list__row" style="margin-bottom: 25px;">
              <label style="position: relative;display: block;text-transform: uppercase;font-weight: 600;font-size: 12px;letter-spacing: .5px;color: #939393;">About Test</label>
              <input type="text" value="<?php echo $row['DESCRIPTION']; ?>" style="width: calc(100% - 10px);min-height: 30px;padding-left: 5px;padding-right: 5px;letter-spacing: .5px;border: 0;border-bottom: 2px solid #f0f0f0;">
            </li>
            <li>
              <!-- <button type="submit" class="button">START TEST</button> -->
            </li>
          </ul>
        </form>
		</div>
      </div>
    </div>
  </div>
</body>

</html>