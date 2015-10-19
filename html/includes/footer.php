<footer class="footer">
  <?php if($_SERVER["PHP_SELF"] == "/shadowrunpage/index.php") {
    $impressumlink = "html/impressum.php";
  }
  else {
    $impressumlink = "impressum.php";
  }
  ?>
  <div class="container footer">
   <a class="footerlink" href="<?= $impressumlink ?>">Impressum</a>
 </div>
</body>
</html>
</footer>
