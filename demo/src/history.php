<?php
	

 ?>

<div id="content">
	<div id="headline">
		<div class="resolutionContent"></div>
		<h2>History</h2>
	</div>
	<div id="messageBox"></div>
	<div id="main">
		<div class="amountTransaction">
			<div class="amount">
				<h3>Balance</h3>
				<p> 
					"$0.00&nbsp;"
					<span>CAD</span>
				</p>
			</div>

			<div class="basicSearch">
				<ul><li class="first">
					<script type="text/javascript">var myText = 'Recent\x20Activity';
					document.write('<a href="#" title="See your most recent transactions, transfers, and more." onClick="document.getElementById(\'myAllTextSubmitID\').name = \'_history-recent\';document.getElementById(\'myAllTextSubmitID\').value = \'Recent\x20Activity\';document.forms.history.submit();return false;" class="autoTooltip">');document.write(myText);document.write('</a>');</script><a href="#" title="" onclick="document.getElementById('myAllTextSubmitID').name = '_history-recent';document.getElementById('myAllTextSubmitID').value = 'Recent Activity';document.forms.history.submit();return false;" class="autoTooltip">Recent Activity<span class="accessAid">See your most recent transactions, transfers, and more.</span></a><noscript>&lt;input type="submit" name="_history-recent" value="Recent&amp;#x20;Activity" class="transparentButton" alt=""&gt;</noscript></li><li class=" selected">All activity</li><li class="last"><script type="text/javascript">var myText = 'Find\x20a\x20transaction';
					document.write('<a href="#" title="Search all of your transactions." onClick="document.getElementById(\'myAllTextSubmitID\').name = \'_history-search\';document.getElementById(\'myAllTextSubmitID\').value = \'Find\x20a\x20transaction\';document.forms.history.submit();return false;" class="autoTooltip">');document.write(myText);document.write('</a>');</script><a href="#" title="" onclick="document.getElementById('myAllTextSubmitID').name = '_history-search';document.getElementById('myAllTextSubmitID').value = 'Find a transaction';document.forms.history.submit();return false;" class="autoTooltip">Find a transaction<span class="accessAid">Search all of your transactions.</span></a><noscript>&lt;input type="submit" name="_history-search" value="Find&amp;#x20;a&amp;#x20;transaction" class="transparentButton" alt=""&gt;</noscript></li></ul>
				<fieldset class="multi">
					<legend class="accessAid">
						<span class="label">Search</span>
					</legend>
					<p class="group">
						<label class="accessAid" for="timeperiod">Timeperiod</label>
						<span class="field">
							<input type="radio" id="timeperiod" class="daterange radio" name="dateoption" value="timeperiod">
						</span>
					</p>
					<p class="group">
						<label class="accessAid" for="dayoption">Transactionoption</label>
						<span class="field">
							<select class="dayoption" id="dayoption" name="transactionperiod">
								<option value="0">Select</option>
								<option value="1">Today</option>
								<option value="3">This Week (Mon - Today)</option>
								<option value="5">Last Week (Mon - Sun)</option>
								<option value="6">This Month</option>
								<option value="7">Last Month</option>
								<option value="8">Last Three Months</option>
							</select>
						</span>
					</p>
					<p class="group">
						<label class="accessAid" for="dateoptions">SelectDateRange</label>
						<span class="field">
							<input type="radio" id="dateoptions" class="daterange radio" checked="" name="dateoption" value="dateselect"></span>
						</p>
						<p class="group">
							<label class="accessAid" for="from_date">From</label>
							<span class="field">
								<input size="15" type="text" id="from_date" name="from_date" value="3/27/2014" maxlength="10" class="calIcon" autocomplete="off"></span>
							</p>
							<p class="group">
								<span class="separator">to</span>
							</p>
							<p class="group">
								<label class="accessAid" for="to_date">To</label>
								<span class="field">
									<input size="15" type="text" id="to_date" name="to_date" value="4/26/2014" maxlength="10" class="calIcon" autocomplete="off"></span>
								</p>
								<input type="submit" id="show" name="show" value="Show" class="button primary default">
							</fieldset>
			</div>
		</div>

	</div>
</div>

