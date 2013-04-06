<form accept-charset="UTF-8" action="/controllers/investor.php" class="contact_form" id="new_facility_contact" method="post">
  <fieldset>
    <legend>Investors: please submit your inquiry to CannaTours directly:</legend>
		<label>Name</label>
    <input type="text" name="name">
		<label>Business Name</label>
    <input type="text" name="business_name">
		<label>Email</label>
    <input type="text" name="email">
		<label>Phone</label>
    <input type="text" name="phone">
		<label>Are you currently invested in a cannabis-related company?</label>
		<select name="currently_invested">
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>
		<label>If yes then what type?</label>
    <textarea type="text" name="type_of_investment" rows="7"></textarea>
    <button type="submit" class="btn">Submit</button>
  </fieldset>
</form>
