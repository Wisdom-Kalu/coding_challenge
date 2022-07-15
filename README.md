# coding_challenge

# About the Project
Given an array of integer numbers and an integer target, this program creates a function that returns the two numbers such that they add up to the given target. I assumed that each input would have exactly one solution, and the same element cannot be used twice.

# Languages Used
I used HTML & PHP for this project.

# Resources Needed to Run this Project
You need any type of live server that would run PHP files on your browser. You may use XAMPP or WAMPP as an example. Alternatively, if you have
a user-friendly text-editor such as VSCode, you could search for a live server extention that would help you run the PHP file on the browser.

# Algorithm, Data Structure, Runtime and Justification
In coding up this solution, I evaluated three different algorithmic processes and data structures before settling on using a HashMap. First, I tried the brute force method by using the obvious nested forloop approach. But it has a bad runtime of O(N^2). On the other hand, using a binary search gives a runtime of O(N Log N) in the worst case scenario. This was good. However, I realized I could do better using a HashMap which has a better runtime. For the HashMap, because the whole array needed to be traversed only once, it had the best linear runtime with the worst case scenario being O(N). Thus, I decided to go for this approach.

Coding this with PHP was interesting since PHP had no inbuilt HashMap function or library like other programming languages such as Java. However, I leveraged the associative array and key-value-pair advantage of PHP arrays to replicate a HashMap.
