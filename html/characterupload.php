<?php include '/includes/header.php' ?>
    <div class="container">
        <form class="form-horizontal" method="post" action="savecharacter.php">
            <fieldset>
                <!-- Form Name -->
                <legend>Character Upload</legend>

                <!-- Text input-->
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Name:</label>
                        <div class="col-md-4">
                            <input id="textinput" name="name" placeholder='i.e. "Johnny Quicksilver"' class="form-control input-md" type="text"> </input>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Race:</label>
                        <div class="col-md-4">
                            <select id="selectbasic"  name="race" class="form-control">
                                <option value="Elf">Elf</option>
                                <option value="Dwarf">Dwarf</option>
                                <option value="Human">Human</option>
                                <option value="Orc">Orc</option>
                                <option value="Troll">Troll</option>
                            </select>
                        </div>
                    </div>
                </div>

            <!-- Select Basic -->
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Job:</label>
                        <div class="col-md-4">
                            <select id="selectbasic"  name="job" class="form-control">
                                <option value="Fighter">Streetsam/Ki-Adept</option>
                                <option value="Hacker">Decker/Technomancer</option>
                                <option value="Rigger">Rigger</option>
                                <option value="Wizard">Wizard/Shaman</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text area-->
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">History:</label>
                        <div class="col-md-4">
                            <textarea name="history" id="textarea" placeholder="Where are you born? Who are your parents? What did you do before? Where did you achieve your skils?" class="form-control input-md" type="text"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="row">
                    <div class="form-group">
                    <div class="col-md-offset-4 col-md-8">
                        <button id="button1id" type="submit" class="btn btn-success" disabled>Submit</button>
                        <button id="button2id" type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>

                </div>
            </fieldset>
        </form>
    </div>
<?php include '/includes/footer.php' ?>
