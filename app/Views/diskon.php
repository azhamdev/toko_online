<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="#"><i class="fa fa-home"></i> Home</a>
          <span>Contact</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Map Section Begin -->
<div class="map spad">
  <div class="container">
    <div class="map-inner">
      <section>
        <table border="1" cellpadding="2" cellspacing="2">
          <tr>
            <th>Kode Voucher</th>
          </tr>
          <?php foreach ($diskons as $diskon) { ?>
            <tr>
              <td><?= $diskon['Kode_voucher'] ?></td>
            </tr>
          <?php } ?>
        </table>
      </section>
    </div>
  </div>
</div>
<!-- Map Section Begin -->

<?= $this->endSection() ?>