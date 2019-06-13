<!-- Step intro starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Use Clones</h4>
		<p>Follow these step-by-step instructions to include clones into your game.</p>
		<div class="listWrapper">
			<ol class="stepList">
				<!-- Step TOC starts -->
				<li><input class="stepBtn" type="button" value="1. Add Clones">
				</li>
				<li><input class="stepBtn" type="button" value="2. Scripting with Clones">
				<!-- Step TOC ends -->
			</ol>
		</div>
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Add Clones</h4>
		<p>
			Clones are copies of an agent. To add clones of an agent into your game,
			 drag out <span class="gameBlockText">create clone</span> block from the
			 <span class="gameBlockText">Game</span> drawer.
		</p>
		<img src="/img/tutorial_img/use_clones/create_clone_block.png" width="100%">
		<p>
			Fill in the number of clones as needed.
		</p>
		<img src="/img/tutorial_img/use_clones/50_clones.png" width="100%">
		<p class="tip">
			Note that all properties of an agent are cloned including location, region
			 and whether the agent is excluded.
		</p>
		<hr>
		<p>
			Make sure to specify when the clones will be created using <span class="controlBlockText">Control</span> blocks.
		</p>
		<img src="/img/tutorial_img/use_clones/create_clone_when_game_starts.png" width="100%">
	</div>
</li>
<!-- Step ends -->
<!-- Step starts -->
<li class="stepItem">
	<div class="stepWrapper">
		<h4 class="stepTitle">Scripting with Clones</h4>
		<p>
			Clones differ from duplicates in that they provide an extremely efficient
			 tool to manipulate a large group of agents. In the following tutorial, 
			 we will introduce two ways in which clones can be very powerful.
		</p>
		<hr>
		<p class="uitext">Randomization</p>
		<p>
			In your game, you may find it helpful to spawn a group of agents, 
			 scattered randomly over the map.
		</p>
		<p>
			For example, you can spawn some buried pieces of treasures for the player to find.
		</p>
		<p>
			Use <span class="movementBlockText">Movement</span> blocks to randomize each clone’s location.
		</p>
		<img src="/img/tutorial_img/use_clones/randomize_location.png" width="100%">
		<p>
			Now when the game starts, it will automatically spawn 20 buried pieces
			 of treasure on the map, randomized in location.
		</p>
		<p class="tip">
			Make sure that the randomized locations are legitimate - e.g. on the map, accessible etc.
		</p>
		<hr>
		<p>
			Alternatively, use <span class="controlBlockText">Control</span> blocks
			 and <span class="traitsBlockText">Traits</span> blocks to randomize each clone’s traits.
		</p>
		<img src="/img/tutorial_img/use_clones/randomize_trait.png" width="100%">
		<p>
			Now when the game starts, it will automatically spawn 20 buried pieces on the map,
			 whose values are randomized in the range of rare, super rare and specially super rare.
		</p>
		<hr>
		<p class="uitext">Stamp</p>
		<p>
			Again, using <span class="movementBlockText">Movement</span> blocks, 
			you can make clones that behave like stamps on the map.
		</p>
		<p>
			For example, your game may include a Mark Footprint button that marks
			 the player’s footprint on the map.
		</p>
		<img src="/img/tutorial_img/use_clones/footprint.png" width="100%">
		<p>
			Now when the player marks footprint, a clone of the footprint agent will
			 be created on the map at the location of the player, displaying the player’s
			 distance to the treasure.
		</p>
		<hr>
		<p>
			At the same time, you may find it helpful to use <span class="timerBlockText">Timer</span> blocks to make time stamps.
		</p>
		<img src="/img/tutorial_img/use_clones/timestamp.png" width="100%">
		<p>
			Now when the player marks timestamp, a clone of the Timestamp agent will be created
			 on the map at the location of the player, displaying how many minutes and seconds
			 have passed since the game started.
		</p>
		<p class="tip">
			Make sure to include a timer (a.k.a. <span class="uitext">every … seconds/minutes</span> block)
			 in a script anywhere in the game before using <span class="uitext">elapsed time in seconds
			 </span> block. Elapsed time in seconds will always be 0 if no timer is included in any script.		
		</p>
		<p>
			Please refer to the tutorial for Add Timer(s) in the How To section for more details about timers.
		</p>
	</div>
</li>
<!-- Step ends -->
