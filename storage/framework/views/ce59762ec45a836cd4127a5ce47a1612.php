<div x-data="{isOpen: false}">
  <span x-on:click="isOpen = true; document.querySelector('.chat-field').focus()"
    class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip" data-placement="bottom"><i
      class="fas fa-comment"></i></span>

  <div data-name="<?php echo e(auth()->user()->name); ?>" data-avatar="<?php echo e(auth()->user()->avatar); ?>" id="chat-wrapper"
    x-bind:class="isOpen ? 'chat--visible' : ''"
    class="chat-wrapper chat-wrapper--ready shadow border-top border-left border-right">
    <div class="chat-title-bar">Chat <span x-on:click="isOpen = false" class="chat-title-bar-close"><i
          class="fas fa-times-circle"></i></span></div>
    <div id="chat" class="chat-log">
      <!--[if BLOCK]><![endif]--><?php if(count($chatLog) > 0): ?>
      <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $chatLog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!--[if BLOCK]><![endif]--><?php if(($chat['selfmessage'] ?? false) == true): ?>
      <div class="chat-self">
        <div class="chat-message">
          <div class="chat-message-inner">
            <?php echo e($chat['textvalue']); ?>

          </div>
        </div>
        <img class="chat-avatar avatar-tiny" src="<?php echo e($chat['avatar']); ?>">
      </div>
      <?php else: ?>
      <div class="chat-other">
        <a href="/profile/<?php echo e($chat['name']); ?>"><img class="avatar-tiny" src="<?php echo e($chat['avatar']); ?>"></a>
        <div class="chat-message">
          <div class="chat-message-inner">
            <a href="/profile/<?php echo e($chat['name']); ?>"><strong><?php echo e($chat['name']); ?>:</strong></a>
            <?php echo e($chat['textvalue']); ?>

          </div>
        </div>
      </div>
      <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
      <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <form wire:submit="send" id="chatForm" class="chat-form border-top">
      <input wire:model="textvalue" type="text" class="chat-field" id="chatField" placeholder="Type a message…"
        autocomplete="off">
    </form>
  </div>

</div>

<script>
  document.addEventListener('livewire:initialized', () => {
    Livewire.hook('morph.added', (element) => {
      if (element.el.classList.contains("chat-self") || element.el.classList.contains("chat-other")) {
        const chat = document.querySelector("#chat")
        chat.scrollTop = chat.scrollHeight;
      }
    })
  })
</script>

<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
  integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script><?php /**PATH C:\xampp\htdocs\pmway\resources\views/livewire/chat.blade.php ENDPATH**/ ?>