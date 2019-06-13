<!-- Step intro starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Add Timer(s)</h4>
		<p>Follow these step-by-step instructions to add timer(s) into your game.</p>
		<div class="listWrapper">
			<ol class="stepList">
				<!-- Step TOC starts -->
				<li><input class="stepBtn" type="button" value="1. Add a Timer">
				</li>
				<li><input class="stepBtn" type="button" value="2. Scripting with Timer">
				</li>
				<li><input class="stepBtn" type="button" value="3. Multiple Timers"></li>
				<!-- Step TOC ends -->
			</ol>
		</div>
		<p class="tip">Note that the term “timer” is different from a stopwatch. In TaleBlazer, timer
		 runs as soon as the player starts the game. You may use timer to add recurring events
		  (that may or may not begin to occur when the game starts).</p>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Add a Timer</h4>
		<p>Timer runs as soon as the player starts the game. To add a timer into your game,
		 drag out either an <span class="uitext">every...minutes</span> block or an <span class="uitext">
		 every...seconds</span> block from the <span class="timerBlockText">Timer</span> drawer.</p>
		 <img src="/img/tutorial_img/add_timer/every_minutes.png" width="50%">
		 <img src="/img/tutorial_img/add_timer/every_seconds.png" width="50%">
		<hr>
		<p>
			For <span class="uitext">every...minutes</span> block, fill in the timer manually as needed.
		</p>
		<img src="/img/tutorial_img/add_timer/every_15_minutes.png" width="50%">
		<p>Alternatively, you can use <span class="operatorsBlockText">Operator</span> blocks
		 to build a customized/arbitrary timer.</p>
		 <img src="/img/tutorial_img/add_timer/customized_timer.png" width="100%">
		<hr>
		<p>
			For <span class="uitext">every...seconds</span> block, use the drop down menu to select from a range of options.
		</p>
		<img src="/img/tutorial_img/add_timer/drop_down_menu.png" width="50%">

	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Scripting with Timer</h4>
		<p>
			To control time-specific traits of agent, player or world, use <span class="traitsBlockText">Trait</span> block.
		</p>
		<img src="/img/tutorial_img/add_timer/trait_demonstration.png" width="100%">
		<p>
			Now the <span class="lingo">trait</span> Minutes Played of the player will be incremented every 1 minute.
		</p>
		<hr>
		<p>
			TaleBlazer does not support using <span class="looksBlockText">say</span> blocks or 
			<span class="looksBlockText">show url</span> blocks within a timer. 
			To deal with this issue, consider using a <span class="gameBlockText">bump next</span> block and include the text/url within
			 another <span class="lingo">agent</span> instead.
		</p>
		<p>
			For example, if you want your game to show a message “Are you lost?” every 10 minutes,
			 use a Helper <span class="uitext">agent</span>.
		</p>
		<img src="/img/tutorial_img/add_timer/bump_helper_next.png" width="60%">
		<p>
			Then within the Helper agent’s script, use a <span class="looksBlockText">say</span> block.
		</p>
		<img src="/img/tutorial_img/add_timer/within_helper.png" width="60%">
		<p>
			
			Now the Helper agent will be bumped automatically every 10 minutes and
			 shows the supportive text to the player.
		</p>
		<hr>
		<p>
			To provide a timer that is triggered only in a specific context, 
			use <span class="controlBlockText">Control</span> blocks .
		</p>
		<img src="/img/tutorial_img/add_timer/context_timer.png" width="100%">
		<p>
			Now the Helper agent will be bumped every 10 minutes only if 
			the trait Score of the player is less than 10.
		</p>
		<hr>
		<p>
			To provide time-specific feedback to the game, use <span class="uitext">elapsed
			 time in seconds</span> block and <span class="controlBlockText">Control</span> blocks .
		</p>
		<img src="/img/tutorial_img/add_timer/time_specific_feedback.png" width="100%">
		<p>
			Now if the player picks up Treasure within 10 seconds since the game has started,
			 then the trait Score of the player will be incremented by 10, else it will be
			 incremented by 5.
		</p>
		<p class="tip">
			Make sure to include a timer (a.k.a. <span class="uitext">every … seconds/minutes</span> block)
			 in a script anywhere in the game before using <span class="uitext">elapsed time in seconds
			 </span> block. Elapsed time in seconds will always be 0 if no timer is included in any script.
		</p>
		<hr>
		<p>
			You may also use <span class="uitext">elapsed time in seconds</span> block to
			 add a recurring event that does not begin when the game starts.
		</p>
		<img src="/img/tutorial_img/add_timer/later_timer.png" width="100%">
		<p>
			In this example, your recurring event will not start occurring until 10
			 minutes after the game starts.
		</p>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Multiple Timers</h4>
		<p>TaleBlazer editor supports the use of multiple timers, and thus 
		multiple recurring events in a game. These timers run their own scripts in parallel.</p>
		<hr>
		<p class="uitext">Synchronous Non-Conflicting Events</p>
		<p>
			Your game behaves like a computer program which runs your game
			 code line by line. This process happens really quickly, so on the
			 surface all timers appear to run their scripts simultaneously.
			 However, if you include synchronous non-conflicting events in your game,
			 it is uncertain how TaleBlazer would prioritize which event.
		</p>
		<p>
			For example, if you have two timers that look like this:
		</p>
		<img src="/img/tutorial_img/add_timer/synchronous_non_conflicting_events.png" width="80%">
		<p>
			These two timers indeed run in parallel, but since the player
			 can only bump one agent at a time, it is uncertain which agent
			 (Fast or Slow) would be bumped first. 
		</p>
		<p>
			If order matters in your game, include these events within the
			 same <span class="timerBlockText">Timer</span> block instead.
		</p>
		<img src="/img/tutorial_img/add_timer/ordered_events.png" width="80%">
		<p>
			Now agent Fast is guaranteed to be bumped first.
		</p>
		<hr>
		<p class="uitext">Synchronous Conflicting Events</p>
		<p>
			If your timers attempt to do conflicting things, you should 
			 never expect your game to behave in any certain manner.
		</p>
		<p>
			For example, if you have two timers that look like this:
		</p>
		<img src="/img/tutorial_img/add_timer/conflicting_events.png" width="80%">
	    <p>
			These two timers attempt to include and exclude agent Treasure
			 from the world at the same time. Therefore, it is uncertain how
			 TaleBlazer would compile your script.
		</p>
		<p class="tip">
			Conflicting timers don’t cause errors, but we do not recommend using them,
			 since the behavior is unpredictable. 
		</p>
	</div>
</li>
<!-- Step ends -->
