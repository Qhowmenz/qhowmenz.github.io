// 1. Validate Voucher Form
function validateVoucherForm() {
  const name = document.forms["voucherForm"]["name"].value.trim();
  const institution = document.forms["voucherForm"]["institution"].value.trim();
  const phone = document.forms["voucherForm"]["phone"].value.trim();
  const voucher = document.forms["voucherForm"]["voucher_type"].value;

  if (!name || !institution || !phone || !voucher) {
    alert("Please fill in all required fields.");
    return false;
  }

  if (!/^[0-9]{10}$/.test(phone)) {
    alert("Phone number must be 10 digits.");
    return false;
  }

  return true;
}

// 2. Admin Login Validation
function validateLoginForm() {
  const username = document.forms["adminLogin"]["username"].value.trim();
  const password = document.forms["adminLogin"]["password"].value.trim();

  if (!username || !password) {
    alert("Both fields are required.");
    return false;
  }

  return true;
}

// 3. Dashboard Table Search (Optional)
function filterTable() {
  const input = document.getElementById("searchInput");
  const filter = input.value.toLowerCase();
  const table = document.getElementById("requestTable");
  const rows = table.getElementsByTagName("tr");

  for (let i = 1; i < rows.length; i++) {
    const cells = rows[i].getElementsByTagName("td");
    let match = false;

    for (let j = 0; j < cells.length; j++) {
      if (cells[j].innerText.toLowerCase().includes(filter)) {
        match = true;
        break;
      }
    }

    rows[i].style.display = match ? "" : "none";
  }
}
