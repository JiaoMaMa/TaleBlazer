<!-- Step intro starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">
			<span class="timerBlockText">Timer Drawer</span>
		</h4>
		<p>These blocks are in the Timer drawer of the script editor.</p>
		<div class="listWrapper">
			<ol class="stepList">
				<!-- Step TOC starts -->
                <li><input class="stepBtn" type="button" value="every ... minutes"></li>
				<li><input class="stepBtn" type="button" value="every ... seconds"></li>
                <li><input class="stepBtn" type="button" value="elapsed time in seconds"></li>
				<!-- Step TOC ends -->
			</ol>
		</div>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="blockTitle">every ... minutes</h4>
		<div class="blockHolder">
			<img src="/img/tutorial_img/blocks/timer/every_minutes.png" alt="" width=65%>
			<p>Runs the timer as soon as the player starts the game. This timer is 
                measured in minutes. Consider using an every … seconds block for games
                requiring better time precision.</p>
		</div>
		<hr>
		<p class="tip">TaleBlazer does not support using say blocks or show url blocks
                        within a timer. Consider using a bump next block instead. Refer
                        to How To page.</p>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="blockTitle">every ... seconds</h4>
		<div class="blockHolder">
			<img src="/img/tutorial_img/blocks/timer/every_seconds.png" alt="" width=65%>
			<p>Runs the timer as soon as the player starts the game. This timer is measured
                in seconds. Consider using an every … minutes block for games requiring a 
                measurement in minutes or an customized time interval.</p>
		</div>
		<hr>
		<p class="tip">TaleBlazer does not support using say blocks or show url blocks
                        within a timer. Consider using a bump next block instead. Refer
                        to How To page.</p>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="blockTitle">elapsed time in seconds</h4>
		<div class="blockHolder">
			<img src="/img/tutorial_img/blocks/timer/elapsed_time_in_seconds.png" alt="" width=65%>
			<p>Reports how many seconds have elapsed since the timer has started. Since any 
                timer will start as soon as the player starts the game, this block will report
                how many seconds have elapsed since the player started the game. </p>
		</div>
	</div>
</li>
<!-- Step ends -->