document.addEventListener('DOMContentLoaded', () => {
  let companyCount = 1;

  const addCompanyButton = document.getElementById('add-company') as HTMLButtonElement;
  const debtEntries = document.getElementById('debt-entries') as HTMLElement;

  addCompanyButton.addEventListener('click', () => {
      companyCount++;
      const newCompanyForm = document.createElement('div');
      newCompanyForm.className = 'debt-entry mt-4';
      newCompanyForm.innerHTML = `
          <h4>会社${companyCount}</h4>
          <div class="form-group">
              <label for="principal">借入金額 (円):</label>
              <input type="number" class="form-control" name="principal[]" required>
          </div>
          <div class="form-group">
              <label for="interest_rate">金利 (%):</label>
              <input type="number" step="0.01" class="form-control" name="interest_rate[]" required>
          </div>
          <div class="form-group">
              <label for="monthly_payment">毎月の支払額 (円):</label>
              <input type="number" class="form-control" name="monthly_payment[]" required>
          </div>
      `;
      debtEntries.appendChild(newCompanyForm);
  });
});
