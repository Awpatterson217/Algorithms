# Algorithms
Algorithms I have found helpful; I will expand this repository as I write them.  
<br />
I will write each algorthim in several languages, likely: JavaScript, PHP, C, or Java. 
<br /><br />
<hr>
<h3>Weighted-Mediod</h3>
<br />
-A method to find the point in a two-dimensional Euclidean space which divides the dataset into equal, weighted subsets.
 A concept similar to the center of mass.
<br />
-This method can be inaccurate or irrelevant if there are too few key-value pairs, e.g. while this method is useful for something like days in a year, it would not be useful for days in a week. 
<br />
-Data must be an array of key value pairs.
<br /><br />
<b>Steps:</b>
<br /><br />
1: Find (the sum of all values / 2) by looping through the array.
<br />
2: Loop through the array of KVPs while adding the values sequentially until the next value added would make the running total of the summation greater than the value found in step 1. 
<br />
3: Return the key of the last object whose value was added to the partial sum in step 2. 
<br /><br />
<b>Complete Example</b>
<br /><br /><pre>
Given the dataset: <br />

[{1:5},{2:9},{3:4},{4:5},{5:5},{6:9},{7:4},{8:5},{9:9},{10:4},{11:5},{12:9},{13:4},
{14:5},{15:5},{16:9},{17:4},{18:5},{19:9},{20:0},{21:4},{22:5},{23:9},{24:0}]
               
</pre>
1:
<pre>5+9+4+5+5+9+4+5+9+4+5+9+4+5+5+9+4+5+9+0+4+5+9+0 = 132
<br />
132/2 = 66
</pre>
2: 
<pre>5+9+4+5+5+6+4+5+9+4+5 = 65 


The algorithm stops at the eleventh hour, because adding the value of the 12th hour (9)
to the partial sum would mean the partial sum would equal a number greater than 66
</pre>
3: 
<pre>Return 11
</pre>

