<div>
<h3 class="text-blue" id="counter"></h3>       
        

        <script>
            /* Auto-increment counter + 2 every second */
            var day = {{ $number_day}};

            var counter = {{ $migrant_counter }}
            var counterNode = document.getElementById('counter');
            counterNode.innerHTML = counter;
            document.body.appendChild(counterNode);
            
            setInterval(function() {
            counter += 1;
            counterNode.innerHTML = counter;
            }, 1000);
            
        </script>
</div>
