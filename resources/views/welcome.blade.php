<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin Panel - Produk</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Table -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.26.0/dist/bootstrap-table.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.26.0/dist/extensions/filter-control/bootstrap-table-filter-control.css">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
  body { background: #f1f5f9; }

  /* SIDEBAR */
  .sidebar {
    width: 260px;
    background: #0f172a;
    color: #e5e7eb;
  }
  .sidebar a {
    color: #cbd5f5;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    border-radius: 6px;
    text-decoration: none;
  }
  .sidebar a.active,
  .sidebar a:hover {
    background: #1e293b;
    color: #fff;
  }

  /* TABLE */
  .table-wrapper {
    background: #fff;
    border-radius: 8px;
    padding: 12px;
    border: 1px solid #e5e7eb;
  }

  /* DARK HEADER */
  .table-dark {
    --bs-table-bg: #0f172a;
    --bs-table-striped-bg: #1e293b;
    --bs-table-hover-bg: #334155;
    color: #e5e7eb;
  }

  /* SEARCH */
  .search-input {
    border: 1px solid #d1d5db;
    border-radius: 6px;
    padding: 6px 10px;
    font-size: 13px;
  }

  /* SORTING */
  th.sortable { cursor: pointer; user-select: none; }
  th.sortable:hover { color: #2563eb; }
  .sort-icon { font-size: 11px; margin-left: 4px; color: #9ca3af; }

  .fixed-table-loading { display: none !important; }
</style>
</head>

<body>

<div class="d-flex min-vh-100">

  <!-- SIDEBAR -->
  <aside class="sidebar p-3 d-none d-md-flex flex-column">
    <div class="fw-bold fs-5 mb-4">ADMIN PANEL</div>
    <nav class="flex-grow-1">
      <a class="active mb-2"><i class="bi bi-box me-2"></i> Produk</a>
      <a class="mb-2"><i class="bi bi-tags me-2"></i> Kategori</a>
      <a class="mb-2"><i class="bi bi-receipt me-2"></i> Pesanan</a>
      <a class="mb-2"><i class="bi bi-people me-2"></i> User</a>
    </nav>
    <div class="text-muted small">© 2025 Admin</div>
  </aside>

  <!-- RIGHT -->
  <div class="flex-grow-1 d-flex flex-column">

    <!-- HEADER -->
    <header class="bg-white border-bottom px-4 py-3 d-flex justify-content-between align-items-center">
      <h6 class="mb-0 fw-semibold text-secondary">Manajemen Produk</h6>
      <button class="btn btn-primary btn-sm">
        <i class="bi bi-plus"></i> Tambah Produk
      </button>
    </header>

    <!-- CONTENT -->
    <main class="p-4 flex-grow-1">

      <!-- SEARCH + EXPORT -->
      <div class="d-flex gap-2 mb-3 align-items-center">
        <input id="customSearchInput" class="search-input w-25" placeholder="Search...">
        <div id="toolbar">
          <select class="form-select form-select-sm">
            <option value="">Export Basic</option>
            <option value="all">Export All</option>
            <option value="selected">Export Selected</option>
          </select>
        </div>
      </div>

      <!-- TABLE -->
      <div class="table-wrapper">
        <table
          id="table"
          data-toggle="table"
          data-search="true"
          data-search-selector="#customSearchInput"
          data-pagination="true"
          data-page-size="5"
          data-filter-control="true"
          data-show-columns="true"
          data-click-to-select="true"
          data-toolbar="#toolbar"
          data-show-export="true"
          data-thead-classes="table-dark"
        >
          <thead class="text-center align-middle">
            <tr>
              <th data-checkbox="true"></th>

              <th data-field="id" data-sortable="true"  class="sortable">
                ID <i class="bi bi-filter sort-icon"></i>
              </th>

              <th data-field="id" data-sortable="true"  class="sortable">
                ID <i class="bi bi-filter sort-icon"></i>
              </th>

              <th data-field="id" data-sortable="true"  class="sortable">
                ID <i class="bi bi-filter sort-icon"></i>
              </th>

              <th data-field="id" data-sortable="true"  class="sortable">
                ID <i class="bi bi-filter sort-icon"></i>
              </th>

              <!-- <th data-field="name" data-sortable="true" data-filter-control="input" class="sortable">
                Nama Produk <i class="bi bi-filter sort-icon"></i>
              </th>

              <th data-field="category" data-sortable="true" data-filter-control="select" class="sortable">
                Kategori <i class="bi bi-filter sort-icon"></i>
              </th>

              <th data-field="price" data-sortable="true" data-filter-control="input" class="sortable">
                Harga <i class="bi bi-filter sort-icon"></i>
              </th> -->
            </tr>
          </thead>

          <!-- DATA DUMMY HTML -->
          <tbody class="text-center align-middle">
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
            <tr><td></td><td>1</td><td>Laptop ASUS</td><td>Elektronik</td><td>12000000</td></tr>
            <tr><td></td><td>2</td><td>Mouse Logitech</td><td>Aksesoris</td><td>250000</td></tr>
            <tr><td></td><td>3</td><td>Keyboard Mechanical</td><td>Aksesoris</td><td>750000</td></tr>
            <tr><td></td><td>4</td><td>Monitor LG 24"</td><td>Elektronik</td><td>2800000</td></tr>
            <tr><td></td><td>5</td><td>Meja Kantor</td><td>Furniture</td><td>1500000</td></tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- EXPORT -->
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/libs/jsPDF/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jspdf-autotable@3.5.31/dist/jspdf.plugin.autotable.min.js"></script>

<!-- BOOTSTRAP TABLE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.26.0/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.26.0/dist/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.26.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

<script>
  const $table = $('#table')

  const baseOptions = {
    sortName: 'id',
    sortOrder: 'asc',
    exportTypes: ['csv', 'excel', 'pdf'],
    onSort: updateSortIcons
  }

  function initTable(exportType = '') {
    $table.bootstrapTable('destroy').bootstrapTable({
      ...baseOptions,
      exportDataType: exportType || 'basic'
    })
  }

  // INIT
  initTable()

  // HANDLE EXPORT MODE
  $('#toolbar select').on('change', function () {
    initTable($(this).val())
  })

  function updateSortIcons(name, order) {
    const $thead = $table.closest('.bootstrap-table').find('thead')
    $thead.find('.sort-icon')
      .removeClass('bi-sort-up bi-sort-down text-primary')
      .addClass('bi-filter')
    const $active = $thead.find(`th[data-field="${name}"] .sort-icon`)
    if (order === 'asc') $active.addClass('bi-sort-up text-primary')
    if (order === 'desc') $active.addClass('bi-sort-down text-primary')
  }
</script>

</body>
</html>
