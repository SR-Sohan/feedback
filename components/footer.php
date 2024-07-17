
<footer class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center justify-center lg:px-8">
        <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 TruthWhisper, Inc. All rights reserved.</p>
    </div>
</footer>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');

            dropdownButton.addEventListener('click', () => {
                // Toggle dropdown menu visibility
                dropdownMenu.classList.toggle('hidden');
            });

            // Optional: Close the dropdown if clicking outside
            document.addEventListener('click', (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

</body>
</html>