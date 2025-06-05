# week-1 / Algoritm Fundamentals and Two Pointers

## Data Structures
- Array
- HashMap:
  + Access: O(1)
  + Insert/Delete: O(1)
  + Worst-case (hash collisions): O(n)
- HashSet: (Set)

A data structure that stores a collection of distinct
  + Access: O(1)
  + Insert/Delete: O(1)
  + Worst-case (hash collisions): O(n)

- Stack:

A linear data structure that follows the LIFO principle, where elements are added and removed from the same end, called the "top" of the stack.

  + Push O(1)
  + Pop O(1)

- Queue (Dequeue)

A linear data structure that follows the FIFO principle, where elements are added at the rear (enqueue) and removed from the front (dequeue).

In Java and C++, you can only do enqueue from one side and dequeue from the other side. But for Python, it's like a Doubly-LinkedList, so you can do wherever.

- Heap (Priority Queue)

A heap queue or priority queue is a data structure that allows us to quickly access the smallest (min-heap) or largest (max-heap) element.

If it's the min-heap, we will have the minimum one at the root, and if it's the max-heap, we will have the maximum one at the root.

It's O(logn)?? because every node has two children

- LinkedList

A linear data structure in which elements, called nodes, are connected using pointers, with each node containing a value and a reference to the next node.

- Access: O(n)
- Insert/Delete at head: O(1)
- Insert/Delete at tail or middle: O(n)

HashSet and HashMap have the same structure, but the value and the key for the HashSet is itself.

## Practice Question

- 1. Two Sum
- 167. Two Sum II - Input Array is Sorted