<form accept-charset="UTF-8" action="/controllers/basic.php" class="contact_form" id="new_basic_contact" method="post">
  <fieldset>
    <legend>Tell us about yourself and when you would like to visit CannaTours:</legend>
		<label>Name</label>
    <input type="text" name="name">
		<label>Email</label>
    <input type="text" name="email">
		<label>Phone</label>
    <input type="text" name="phone">
		<label>Tell us what you would like to see through CannaTours</label>
    <textarea type="text" name="wish" rows="7"></textarea>
		<label>When are you planning your vacation?(Box for date)</label>
    <input type="datetime" name="next_vacation" class="datetime">
    <button type="submit" class="btn">Submit</button>
  </fieldset>
</form>
