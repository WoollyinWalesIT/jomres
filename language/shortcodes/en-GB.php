
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/

/
/
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
1
C
P
A
N
E
L
'
,
 
'
T
h
i
s
 
i
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
c
p
a
n
e
l
 
f
r
o
n
t
p
a
g
e
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
1
T
A
P
E
C
H
A
R
T
'
,
 
'
T
h
i
s
 
i
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
a
p
e
 
c
h
a
r
t
 
w
h
i
c
h
 
w
h
i
c
h
 
p
r
o
v
i
d
e
s
 
a
n
 
o
v
e
r
v
i
e
w
 
o
f
 
r
e
a
l
-
t
i
m
e
 
b
o
o
k
i
n
g
s
,
 
a
v
a
i
l
a
b
i
l
i
t
y
 
a
n
d
 
o
c
c
u
p
a
n
c
y
 
a
t
 
a
 
g
l
a
n
c
e
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
M
P
A
R
E
'
,
 
'
T
h
i
s
 
s
c
r
i
p
t
 
a
l
l
o
w
s
 
t
h
e
 
u
s
e
r
 
t
o
 
c
o
m
p
a
r
e
 
s
e
v
e
r
a
l
 
p
r
o
p
e
r
t
i
e
s
 
a
g
a
i
n
s
t
 
e
a
c
h
 
o
t
h
e
r
,
 
u
p
 
t
o
 
a
 
m
a
x
i
m
u
m
 
o
f
 
3
 
p
r
o
p
e
r
t
i
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
M
P
A
R
E
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
S
'
,
 
'
A
 
c
o
m
m
a
 
s
e
p
a
r
a
t
e
d
 
l
i
s
t
 
o
f
 
p
r
o
p
e
r
t
y
 
u
i
d
s
,
 
e
g
.
 
1
2
,
8
,
7
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
N
T
A
C
T
O
W
N
E
R
'
,
 
'
B
u
i
l
d
s
 
t
h
e
 
c
o
n
t
a
c
t
 
o
w
n
e
r
 
f
o
r
m
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
N
T
A
C
T
O
W
N
E
R
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
P
a
s
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
o
 
b
e
 
c
o
n
t
a
c
t
e
d
.
 
P
a
s
s
 
0
 
(
z
e
r
o
)
 
t
o
 
i
n
s
t
e
a
d
 
c
o
n
t
a
c
t
 
s
i
t
e
 
a
d
m
i
n
.
 
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
H
O
T
E
L
_
D
E
T
A
I
L
S
'
,
 
"
S
h
o
w
s
 
t
h
e
 
C
o
m
p
a
n
y
 
I
n
f
o
 
p
a
g
e
 
p
u
l
l
i
n
g
 
d
e
t
a
i
l
s
 
f
r
o
m
 
t
h
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
'
s
 
'
Y
o
u
r
 
c
o
m
p
a
n
y
 
d
e
t
a
i
l
s
'
 
i
n
 
P
r
o
p
e
r
t
y
 
C
o
n
f
i
g
u
r
a
t
i
o
n
.
 
T
h
e
 
d
e
t
a
i
l
s
 
i
n
 
t
h
i
s
 
t
a
b
 
w
o
u
l
d
 
t
y
p
i
c
a
l
l
y
 
b
e
 
u
s
e
d
 
f
o
r
 
c
o
r
r
e
s
p
o
n
d
a
n
c
e
,
 
a
l
l
o
w
i
n
g
 
m
a
n
a
g
e
r
s
 
t
o
 
h
a
v
e
 
b
o
t
h
 
t
h
e
 
h
o
t
e
l
/
a
p
a
r
m
e
n
t
 
a
d
d
r
e
s
s
,
 
a
n
d
 
a
 
s
e
p
a
r
a
t
e
 
a
d
d
r
e
s
s
 
f
o
r
 
b
u
s
i
n
e
s
s
 
p
u
r
p
o
s
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
H
O
T
E
L
_
D
E
T
A
I
L
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
"
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
c
a
l
e
n
d
a
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
P
a
s
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
o
 
b
e
 
s
h
o
w
n
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
M
O
N
T
H
S
_
T
O
_
S
H
O
W
'
,
 
'
M
o
n
t
h
s
 
t
o
 
s
h
o
w
,
 
d
e
f
a
u
l
t
 
i
s
 
2
4
 
i
f
 
n
o
t
 
o
t
h
e
r
w
i
s
e
 
s
e
t
.
 
N
o
t
 
c
o
m
p
a
t
i
b
l
e
 
w
i
t
h
 
t
h
e
 
S
h
o
w
 
J
u
s
t
 
M
o
n
t
h
 
v
a
r
i
a
b
l
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
S
H
O
W
_
J
U
S
T
_
M
O
N
T
H
'
,
 
"
S
e
t
 
t
h
i
s
 
t
o
 
1
 
i
f
 
y
o
u
 
j
u
s
t
 
w
a
n
t
 
t
o
 
s
h
o
w
 
t
h
e
 
c
u
r
r
e
n
t
 
m
o
n
t
h
 
o
n
 
i
t
'
s
 
o
w
n
.
 
T
h
e
 
m
o
n
t
h
s
_
t
o
_
s
h
o
w
 
s
e
t
t
i
n
g
 
w
i
l
l
 
b
e
 
i
g
n
o
r
e
d
 
i
f
 
s
h
o
w
_
j
u
s
t
_
m
o
n
t
h
 
i
s
 
u
s
e
d
 
i
n
 
t
h
e
 
s
a
m
e
 
s
h
o
r
t
c
o
d
e
,
 
s
o
 
y
o
u
 
s
h
o
u
l
d
 
u
s
e
 
o
n
e
 
o
r
 
t
h
e
 
o
t
h
e
r
,
 
n
o
t
 
b
o
t
h
 
a
t
 
t
h
e
 
s
a
m
e
 
t
i
m
e
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
d
e
s
c
r
i
p
t
i
o
n
 
t
e
x
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
D
E
S
C
R
I
P
T
I
O
N
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
E
X
T
R
A
S
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
d
e
s
c
r
i
p
t
i
o
n
 
t
e
x
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
E
X
T
R
A
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
F
E
A
T
U
R
E
S
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
F
E
A
T
U
R
E
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
h
e
a
d
e
r
 
t
e
m
p
l
a
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
_
T
Y
P
E
S
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
r
o
o
m
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
_
T
Y
P
E
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
A
I
N
_
I
M
A
G
E
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
A
I
N
_
I
M
A
G
E
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
A
P
'
,
 
'
S
h
o
w
s
 
j
u
s
t
 
t
h
e
 
P
r
o
p
e
r
t
y
 
m
a
p
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
A
P
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
O
R
E
I
N
F
O
'
,
 
'
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
M
o
r
e
 
I
n
f
o
 
t
e
x
t
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
M
O
R
E
I
N
F
O
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
Q
R
_
C
O
D
E
_
D
I
R
E
C
T
I
O
N
S
'
,
 
'
Q
R
 
c
o
d
e
 
t
h
a
t
 
l
i
n
k
s
 
t
o
 
g
m
a
p
s
.
 
T
h
i
s
 
c
a
n
 
b
e
 
s
c
a
n
n
e
d
 
i
n
t
o
 
a
 
p
h
o
n
e
 
u
s
i
n
g
 
a
 
q
r
 
c
o
d
e
 
r
e
a
d
i
n
g
 
a
p
p
 
t
h
a
t
 
p
r
o
v
i
d
e
s
 
d
i
r
e
c
t
i
o
n
s
 
t
o
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
Q
R
_
C
O
D
E
_
D
I
R
E
C
T
I
O
N
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
E
V
I
E
W
S
'
,
 
"
S
h
o
w
s
 
a
 
p
r
o
p
e
r
t
y
'
s
 
r
e
v
i
e
w
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
E
V
I
E
W
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
E
V
I
E
W
S
_
S
U
M
M
A
R
Y
'
,
 
"
S
h
o
w
s
 
a
 
p
r
o
p
e
r
t
y
'
s
 
r
e
v
i
e
w
 
s
u
m
m
a
r
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
E
V
I
E
W
S
_
S
U
M
M
A
R
Y
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
'
,
 
'
S
h
o
w
s
 
a
n
 
i
n
d
i
v
i
d
u
a
l
 
r
o
o
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
r
o
o
m
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
S
'
,
 
"
S
h
o
w
s
 
a
 
p
r
o
p
e
r
t
y
'
s
 
r
o
o
m
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
S
_
S
L
I
D
E
S
H
O
W
'
,
 
"
S
h
o
w
s
 
a
 
p
r
o
p
e
r
t
y
'
s
 
r
o
o
m
 
i
m
a
g
e
s
 
a
s
 
a
 
s
l
i
d
e
s
h
o
w
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
O
O
M
S
_
S
L
I
D
E
S
H
O
W
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
s
l
i
d
e
s
h
o
w
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
S
L
I
D
E
S
H
O
W
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
T
A
R
I
F
F
S
'
,
 
'
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
a
r
i
f
f
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
T
A
R
I
F
F
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
S
I
T
E
_
B
U
S
I
N
E
S
S
'
,
 
"
S
h
o
w
s
 
t
h
e
 
s
i
t
e
'
s
 
b
u
s
i
n
e
s
s
 
a
d
d
r
e
s
s
 
a
s
 
e
n
t
e
r
e
d
 
i
n
t
o
 
S
i
t
e
 
C
o
n
f
i
g
u
r
a
t
i
o
n
 
>
 
Y
o
u
r
 
C
o
m
p
a
n
y
 
d
e
t
a
i
l
s
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
T
E
R
M
S
'
,
 
'
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
e
r
m
s
 
a
n
d
 
c
o
n
d
i
t
i
o
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
T
E
R
M
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
I
D
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,
 
"
S
h
o
w
s
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
U
I
 
c
a
l
e
n
d
a
r
,
 
w
h
i
c
h
 
i
s
 
a
 
d
i
f
f
e
r
e
n
t
 
c
a
l
e
n
d
a
r
 
t
o
 
t
h
e
 
m
a
i
n
 
l
a
r
g
e
 
c
a
l
e
n
d
a
r
 
a
n
d
 
i
s
 
b
a
s
e
d
 
o
n
 
t
h
e
 
J
q
u
e
r
y
 
U
I
 
c
a
l
e
n
d
a
r
 
f
u
n
c
t
i
o
n
a
l
i
t
y
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
'
P
a
s
s
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
o
 
b
e
 
s
h
o
w
n
.
 
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
N
O
S
H
O
W
L
E
G
E
N
D
'
,
 
'
S
e
t
 
t
h
i
s
 
t
o
 
1
 
t
o
 
n
o
t
 
s
h
o
w
 
t
h
e
 
l
e
g
e
n
d
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
'
,
 
"
S
h
o
w
s
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s
,
 
w
h
i
c
h
 
c
a
n
 
b
e
 
e
n
h
a
n
c
e
d
 
b
y
 
a
d
d
i
n
g
 
s
e
a
r
c
h
 
p
a
r
a
m
e
t
e
r
s
.
 
W
e
 
d
o
n
'
t
 
r
e
c
o
m
m
e
n
d
 
t
h
a
t
 
y
o
u
 
u
s
e
 
a
l
l
 
p
a
r
a
m
e
t
e
r
s
 
a
t
 
t
h
e
 
s
a
m
e
 
t
i
m
e
,
 
b
e
c
a
u
s
e
 
y
o
u
'
l
l
 
e
n
d
 
u
p
 
w
i
t
h
 
s
e
a
r
c
h
 
c
r
i
t
e
r
i
a
 
t
h
a
t
 
a
r
e
 
t
o
o
 
l
i
m
i
t
e
d
.
 
I
n
s
t
e
a
d
 
y
o
u
 
s
h
o
u
l
d
 
r
e
s
t
r
i
c
t
 
y
o
u
r
s
e
l
f
 
t
o
 
j
u
s
t
 
o
n
e
 
o
r
 
t
w
o
 
p
a
r
a
m
e
t
e
r
s
,
 
e
.
g
.
 
s
e
a
r
c
h
 
b
y
 
c
o
u
n
t
r
y
 
a
n
d
 
n
u
m
b
e
r
 
o
f
 
s
t
a
r
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
C
O
U
N
T
R
Y
'
,
 
'
S
e
a
r
c
h
 
b
y
 
c
o
u
n
t
r
y
,
 
u
s
i
n
g
 
t
h
e
 
I
S
O
 
A
l
p
h
a
-
2
 
c
o
d
e
,
 
e
g
 
G
B
 
o
r
 
D
E
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
R
E
G
I
O
N
'
,
 
"
S
e
a
r
c
h
 
b
y
 
r
e
g
i
o
n
.
 
A
s
 
r
e
g
i
o
n
s
 
a
r
e
 
s
a
v
e
d
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
,
 
y
o
u
 
m
u
s
t
 
u
s
e
 
t
h
e
 
r
e
g
i
o
n
 
I
D
.
 
V
i
s
i
t
 
A
d
m
i
n
i
s
t
r
a
t
o
r
 
>
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
L
i
s
t
 
r
e
g
i
o
n
s
 
a
n
d
 
h
o
v
e
r
 
t
h
e
 
E
d
i
t
 
l
i
n
k
,
 
t
h
e
r
e
 
y
o
u
 
w
i
l
l
 
s
e
e
 
t
h
e
 
r
e
g
i
o
n
'
s
 
I
D
 
n
u
m
b
e
r
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
T
O
W
N
'
,
 
'
T
h
e
 
f
u
l
l
 
n
a
m
e
 
o
f
 
t
h
e
 
t
o
w
n
 
y
o
u
 
w
a
n
t
 
t
o
 
s
e
a
r
c
h
 
f
o
r
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
F
E
A
T
U
R
E
_
U
I
D
S
'
,
 
'
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
w
i
t
h
 
p
a
r
t
i
c
u
l
a
r
 
f
e
a
t
u
r
e
s
.
 
F
e
a
t
u
r
e
 
i
d
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
A
d
m
i
n
i
s
t
r
a
t
o
r
 
>
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
P
r
o
p
e
r
t
y
 
F
e
a
t
u
r
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
R
O
O
M
_
T
Y
P
E
'
,
 
'
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
w
i
t
h
 
c
e
r
t
a
i
n
 
r
o
o
m
 
t
y
p
e
s
.
 
R
o
o
m
 
t
y
p
e
 
i
d
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
A
d
m
i
n
i
s
t
r
a
t
o
r
 
>
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
R
o
o
m
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
P
T
Y
P
E
'
,
 
'
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
o
f
 
a
 
s
p
e
c
i
f
i
c
 
p
r
o
p
e
r
t
y
 
t
y
p
e
.
 
P
r
o
p
e
r
t
y
 
t
y
p
e
 
i
d
s
 
c
a
n
 
b
e
 
f
o
u
n
d
 
i
n
 
A
d
m
i
n
i
s
t
r
a
t
o
r
 
>
 
J
o
m
r
e
s
 
>
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
>
 
P
r
o
p
e
r
t
y
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
P
R
I
C
E
R
A
N
G
E
S
'
,
 
'
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
w
i
t
h
i
n
 
a
 
s
p
e
c
i
f
i
c
 
p
r
i
c
e
 
r
a
n
g
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
G
U
E
S
T
N
U
M
B
E
R
'
,
 
"
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
w
h
o
'
s
 
t
a
r
i
f
f
s
 
a
l
l
o
w
 
g
u
e
s
t
 
n
u
m
b
e
r
s
 
o
f
 
c
e
r
t
a
i
n
 
v
a
l
u
e
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
p
a
r
t
i
e
s
 
o
f
 
6
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
S
T
A
R
S
'
,
 
'
S
e
a
r
c
h
 
f
o
r
 
p
r
o
p
e
r
t
i
e
s
 
o
f
 
N
 
s
t
a
r
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
A
R
R
I
V
A
L
D
A
T
E
'
,
 
'
S
e
a
r
c
h
 
b
y
 
a
r
r
i
v
a
l
 
d
a
t
e
.
 
S
h
o
u
l
d
 
b
e
 
c
o
m
b
i
n
e
d
 
w
i
t
h
 
t
h
e
 
d
e
p
a
r
t
u
r
e
D
a
t
e
 
p
a
r
a
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
D
E
P
A
R
T
U
R
E
D
A
T
E
'
,
 
'
S
e
a
r
c
h
 
b
y
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
.
 
S
h
o
u
l
d
 
b
e
 
c
o
m
b
i
n
e
d
 
w
i
t
h
 
t
h
e
 
a
r
r
i
v
a
l
D
a
t
e
 
p
a
r
a
m
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
E
A
R
C
H
_
A
R
G
_
C
A
T
E
G
O
R
Y
'
,
 
'
S
e
a
r
c
h
 
b
y
 
p
r
o
p
e
r
t
y
 
c
a
t
e
g
o
r
y
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
V
I
E
W
_
A
G
E
N
T
'
,
 
"
V
i
e
w
 
a
n
 
a
g
e
n
t
'
s
 
p
a
g
e
.
 
Y
o
u
 
c
a
n
 
p
a
s
s
 
E
I
T
H
E
R
 
a
 
p
r
o
p
e
r
t
y
 
u
i
d
,
 
o
r
 
t
h
e
 
a
g
e
n
t
'
s
 
i
d
 
i
t
s
e
l
f
,
 
i
f
 
y
o
u
 
k
n
o
w
 
i
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
V
I
E
W
_
A
G
E
N
T
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,
 
"
A
 
p
r
o
p
e
r
t
y
 
u
i
d
,
 
t
h
i
s
 
w
i
l
l
 
s
h
o
w
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
a
g
e
n
t
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
V
I
E
W
_
A
G
E
N
T
_
A
R
G
_
I
D
'
,
 
"
T
h
e
 
m
a
n
a
g
e
r
'
s
 
d
a
t
a
b
a
s
e
 
i
d
,
 
i
f
 
k
n
o
w
n
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
p
o
p
u
l
a
r
 
p
r
o
p
e
r
t
i
e
s
,
 
t
y
p
i
c
a
l
l
y
 
u
s
e
d
 
i
n
 
m
o
d
u
l
e
 
o
r
 
w
i
d
g
e
t
 
p
o
s
i
t
i
o
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
L
I
S
T
L
I
M
I
T
'
,
 
'
T
h
e
 
m
a
x
i
m
u
m
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
s
h
o
w
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
P
T
Y
P
E
_
I
D
S
'
,
 
'
S
h
o
w
 
o
n
l
y
 
p
r
o
p
e
r
t
i
e
s
 
o
f
 
t
h
i
s
 
s
p
e
c
i
f
i
c
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
P
O
P
U
L
A
R
_
V
E
R
T
I
C
A
L
'
,
 
'
S
e
t
 
t
o
 
1
 
t
o
 
s
h
o
w
 
t
h
e
 
m
o
d
u
l
e
s
 
o
p
t
i
m
i
s
e
d
 
f
o
r
 
a
 
v
e
r
t
i
c
a
l
 
w
i
d
g
e
t
/
m
o
d
u
l
e
 
p
o
s
i
t
i
o
n
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
'
,
 
'
D
i
s
p
l
a
y
s
 
a
 
r
a
n
d
o
m
 
s
e
l
e
c
t
i
o
n
 
o
f
 
p
r
o
p
e
r
t
i
e
s
,
 
t
y
p
i
c
a
l
l
y
 
u
s
e
d
 
i
n
 
m
o
d
u
l
e
 
o
r
 
w
i
d
g
e
t
 
p
o
s
i
t
i
o
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
L
I
S
T
L
I
M
I
T
'
,
 
'
T
h
e
 
m
a
x
i
m
u
m
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
s
h
o
w
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
P
T
Y
P
E
_
I
D
S
'
,
 
'
S
h
o
w
 
o
n
l
y
 
p
r
o
p
e
r
t
i
e
s
 
o
f
 
t
h
i
s
 
s
p
e
c
i
f
i
c
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
R
A
N
D
O
M
_
V
E
R
T
I
C
A
L
'
,
 
'
S
e
t
 
t
o
 
1
 
t
o
 
s
h
o
w
 
t
h
e
 
m
o
d
u
l
e
s
 
o
p
t
i
m
i
s
e
d
 
f
o
r
 
a
 
v
e
r
t
i
c
a
l
 
w
i
d
g
e
t
/
m
o
d
u
l
e
 
p
o
s
i
t
i
o
n
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
E
C
E
N
T
L
Y
_
V
I
E
W
E
D
'
,
 
"
D
i
s
p
l
a
y
s
 
t
h
e
 
g
u
e
s
t
'
s
 
m
o
s
t
 
r
e
c
e
n
t
l
y
 
v
i
e
w
e
d
 
p
r
o
p
e
r
t
i
e
s
,
 
t
y
p
i
c
a
l
l
y
 
u
s
e
d
 
i
n
 
m
o
d
u
l
e
 
o
r
 
w
i
d
g
e
t
 
p
o
s
i
t
i
o
n
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
E
C
E
N
T
L
Y
_
V
I
E
W
E
D
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
R
E
C
E
N
T
L
Y
_
V
I
E
W
E
D
_
L
I
S
T
L
I
M
I
T
'
,
 
'
T
h
e
 
m
a
x
i
m
u
m
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
s
h
o
w
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
R
E
C
E
N
T
L
Y
_
V
I
E
W
E
D
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
R
E
C
E
N
T
L
Y
_
V
I
E
W
E
D
_
V
E
R
T
I
C
A
L
'
,
 
'
S
e
t
 
t
o
 
1
 
t
o
 
s
h
o
w
 
t
h
e
 
m
o
d
u
l
e
s
 
o
p
t
i
m
i
s
e
d
 
f
o
r
 
a
 
v
e
r
t
i
c
a
l
 
w
i
d
g
e
t
/
m
o
d
u
l
e
 
p
o
s
i
t
i
o
n
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
S
P
E
C
I
F
I
C
_
P
R
O
P
E
R
T
I
E
S
'
,
 
'
D
i
s
p
l
a
y
s
 
a
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
,
 
t
y
p
i
c
a
l
l
y
 
u
s
e
d
 
i
n
 
m
o
d
u
l
e
 
o
r
 
w
i
d
g
e
t
 
p
o
s
i
t
i
o
n
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
S
P
E
C
I
F
I
C
_
P
R
O
P
E
R
T
I
E
S
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
S
P
_
U
I
D
S
'
,
 
'
T
h
e
 
p
r
o
p
e
r
t
y
 
i
d
s
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
i
e
s
 
y
o
u
 
w
a
n
t
 
t
o
 
s
h
o
w
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
A
S
A
M
O
D
U
L
E
_
S
P
E
C
I
F
I
C
_
P
R
O
P
E
R
T
I
E
S
_
A
R
G
_
A
S
A
M
O
D
U
L
E
_
S
P
_
V
E
R
T
I
C
A
L
'
,
 
'
S
e
t
 
t
o
 
1
 
t
o
 
s
h
o
w
 
t
h
e
 
m
o
d
u
l
e
s
 
o
p
t
i
m
i
s
e
d
 
f
o
r
 
a
 
v
e
r
t
i
c
a
l
 
w
i
d
g
e
t
/
m
o
d
u
l
e
 
p
o
s
i
t
i
o
n
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
E
X
C
H
A
N
G
E
_
R
A
T
E
_
C
O
N
V
E
R
S
I
O
N
_
S
E
L
E
C
T
O
R
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
c
u
r
r
e
n
c
y
 
s
e
l
e
c
t
i
o
n
 
d
r
o
p
d
o
w
n
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
E
X
C
H
A
N
G
E
_
R
A
T
E
_
C
O
N
V
E
R
S
I
O
N
_
S
E
L
E
C
T
O
R
_
A
R
G
_
A
L
T
E
R
N
A
T
E
_
T
E
M
P
L
A
T
E
'
,
 
'
E
n
a
b
l
e
/
d
i
s
a
b
l
e
 
t
h
e
 
a
l
t
e
r
n
a
t
e
 
t
e
m
p
l
a
t
e
 
o
u
t
p
u
t
.
 
T
h
i
s
 
o
u
t
p
u
t
 
i
s
 
i
n
t
e
n
d
e
d
 
f
o
r
 
u
s
e
 
i
n
 
B
o
o
t
s
t
r
a
p
 
t
o
o
l
b
a
r
s
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
C
A
R
T
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
S
h
o
p
p
i
n
g
 
C
a
r
t
 
p
a
g
e
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
C
A
R
T
_
M
O
D
U
L
E
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
S
h
o
p
p
i
n
g
 
C
a
r
t
 
m
o
d
u
l
e
/
w
i
d
g
e
t
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
M
A
I
N
_
M
E
N
U
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
M
a
i
n
 
m
e
n
u
.
 
N
o
t
e
,
 
i
f
 
y
o
u
 
a
r
e
 
r
u
n
n
i
n
g
 
a
 
c
u
s
t
o
m
i
s
e
d
 
v
e
r
s
i
o
n
 
o
f
 
m
a
i
n
m
e
n
u
_
w
r
a
p
p
e
r
_
a
l
t
e
r
n
a
t
e
.
h
t
m
l
 
i
n
 
f
o
r
 
e
x
a
m
p
l
e
 
/
t
e
m
p
l
a
t
e
s
/
j
r
_
l
e
o
h
t
i
a
n
/
h
t
m
l
/
c
o
m
_
j
o
m
r
e
s
 
t
h
e
n
 
y
o
u
 
m
a
y
 
n
e
e
d
 
t
o
 
m
o
d
i
f
y
 
i
t
 
t
o
 
r
e
p
l
a
c
e
 
<
i
>
j
o
m
r
e
s
_
a
l
t
e
r
n
a
t
e
_
m
e
n
u
_
p
o
s
i
t
i
o
n
<
/
i
>
 
w
i
t
h
 
M
E
N
U
_
L
O
C
A
T
I
O
N
 
w
r
a
p
p
e
d
 
i
n
 
c
u
r
l
y
 
b
r
a
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
M
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
e
.
g
.
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
o
r
 
R
o
o
m
s
,
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
R
P
'
,
 
'
T
h
i
s
 
p
a
g
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
y
o
u
r
 
p
r
o
p
e
r
t
y
 
a
n
d
 
t
h
e
 
t
h
i
n
g
s
 
y
o
u
 
o
f
f
e
r
.
 
I
t
 
h
a
s
 
o
n
e
 
m
a
i
n
 
b
u
t
t
o
n
,
 
a
n
d
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
t
h
a
t
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
s
e
l
e
c
t
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
S
o
,
 
t
h
e
 
M
a
i
n
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
 
a
n
d
 
t
h
e
 
S
l
i
d
e
s
h
o
w
 
w
i
l
l
 
o
n
l
y
 
s
h
o
w
 
o
n
e
 
b
u
t
t
o
n
 
b
u
t
 
i
f
 
y
o
u
 
h
a
v
e
 
c
r
e
a
t
e
d
 
a
n
y
 
O
p
t
i
o
n
a
l
 
E
x
t
r
a
s
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
s
e
c
o
n
d
 
b
u
t
t
o
n
 
w
h
e
r
e
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
 
t
h
o
s
e
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
s
.
'
)
;



j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
G
E
N
E
R
I
C
'
,
 
"
<
o
l
>

 
 
<
l
i
>
F
i
r
s
t
 
c
h
o
o
s
e
 
t
h
e
 
i
m
a
g
e
(
s
)
 
y
o
u
'
d
 
l
i
k
e
 
t
o
 
u
p
l
o
a
d
 
b
y
 
c
l
i
c
k
i
n
g
 
A
d
d
 
I
m
a
g
e
 
o
r
 
u
s
i
n
g
 
D
r
a
g
 
a
n
d
 
D
r
o
p
.
 
T
h
e
s
e
 
w
i
l
l
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
d
e
.
<
/
l
i
>

 
 
<
l
i
>
A
b
o
v
e
 
t
h
i
s
 
a
r
e
a
,
 
u
s
e
 
t
h
e
 
\
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
\
"
 
b
u
t
t
o
n
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
.
 
Y
o
u
 
m
a
y
 
b
e
 
o
f
f
e
r
e
d
 
t
h
e
 
o
p
t
i
o
n
 
t
o
 
c
h
o
o
s
e
 
a
 
s
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
 
u
n
d
e
r
n
e
a
t
h
.
 
<
/
l
i
>

 
 
<
l
i
>
 
O
n
c
e
 
y
o
u
'
v
e
 
c
h
o
s
e
n
 
a
 
r
e
s
o
u
r
c
e
 
y
o
u
 
c
a
n
 
t
h
e
n
 
c
l
i
c
k
 
t
h
e
 
U
p
l
o
a
d
 
I
m
a
g
e
 
b
u
t
t
o
n
 
u
n
d
e
r
 
a
n
 
i
m
a
g
e
 
t
o
 
a
s
s
o
c
i
a
t
e
 
i
t
 
w
i
t
h
 
t
h
a
t
 
r
e
s
o
u
r
c
e
.
 
O
n
c
e
 
a
n
 
i
m
a
g
e
 
h
a
s
 
b
e
e
n
 
u
p
l
o
a
d
e
d
,
 
i
t
 
w
i
l
l
 
d
i
s
a
p
p
e
a
r
 
f
r
o
m
 
t
h
e
 
c
o
l
u
m
n
 
o
n
 
t
h
e
 
r
i
g
h
t
 
h
a
n
d
 
s
i
t
e
,
 
a
n
d
 
a
p
p
e
a
r
 
i
n
 
t
h
e
 
l
e
f
t
.
<
/
l
i
>

 
 
<
l
i
>
U
s
e
 
t
h
e
 
T
r
a
s
h
 
b
u
t
t
o
n
 
n
e
x
t
 
t
o
 
e
x
i
s
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
r
e
m
o
v
e
 
i
m
a
g
e
s
 
y
o
u
 
n
o
 
l
o
n
g
e
r
 
w
a
n
t
 
t
o
 
b
e
 
s
h
o
w
n
.
<
/
l
i
>

 
 
<
l
i
>
Y
o
u
 
c
a
n
 
c
h
a
n
g
e
 
t
h
e
 
o
r
d
e
r
 
t
h
a
t
 
f
i
l
e
s
 
a
r
e
 
s
h
o
w
n
 
i
n
 
t
h
e
 
s
l
i
d
e
s
h
o
w
 
b
y
 
r
e
n
a
m
i
n
g
 
t
h
e
m
 
b
e
f
o
r
e
 
u
p
l
o
a
d
i
n
g
 
t
h
e
m
,
 
a
s
 
t
h
e
y
 
a
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
p
a
g
e
s
 
i
n
 
a
l
p
h
a
b
e
t
i
c
a
l
 
o
r
d
e
r
.
<
/
l
i
>

<
/
o
l
>

 
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
P
R
E
V
I
E
W
'
,
 
"
N
e
x
t
 
t
o
 
t
h
e
 
R
e
s
o
u
r
c
e
 
b
u
t
t
o
n
,
 
y
o
u
 
m
a
y
 
s
e
e
 
a
 
P
r
e
v
i
e
w
 
b
u
t
t
o
n
.
 
I
f
 
y
o
u
 
c
l
i
c
k
 
o
n
 
t
h
i
s
 
y
o
u
 
w
i
l
l
 
s
e
e
 
a
 
p
o
p
u
p
 
t
h
a
t
 
s
h
o
w
s
 
y
o
u
 
h
o
w
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
u
p
l
o
a
d
e
d
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
i
n
 
a
 
p
a
g
e
.
 
T
h
i
s
 
h
e
l
p
s
 
t
o
 
g
i
v
e
 
y
o
u
 
a
n
 
i
d
e
a
 
o
f
 
h
o
w
 
t
h
e
 
i
m
a
g
e
s
 
w
i
l
l
 
l
o
o
k
 
t
o
 
y
o
u
r
 
c
u
s
t
o
m
e
r
s
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
L
I
M
I
T
A
T
I
O
N
S
'
,
 
"
T
h
e
r
e
 
i
s
 
n
o
 
l
i
m
i
t
 
t
o
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
i
m
a
g
e
s
 
y
o
u
 
c
a
n
 
u
p
l
o
a
d
.
 
I
m
a
g
e
s
 
a
r
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
r
e
s
i
z
e
d
 
w
h
e
n
 
t
h
e
y
 
a
r
e
 
u
p
l
o
a
d
e
d
.
 
Y
o
u
 
c
a
n
 
o
n
l
y
 
u
p
l
o
a
d
 
J
P
G
 
a
n
d
 
P
N
G
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
R
E
'
,
 
"
I
d
e
a
l
l
y
 
a
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
w
o
u
l
d
 
b
e
 
a
t
 
l
e
a
s
t
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
I
M
A
G
E
_
R
E
S
O
L
U
T
I
O
N
_
P
O
S
T
'
,
 
"
 
p
i
x
e
l
s
 
w
i
d
e
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
y
 
m
a
y
 
l
o
o
k
 
f
u
z
z
y
 
a
f
t
e
r
 
t
h
e
y
'
v
e
 
b
e
e
n
 
u
p
l
o
a
d
e
d
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
R
E
'
,
 
"
A
n
y
 
i
m
a
g
e
s
 
y
o
u
 
u
p
l
o
a
d
 
c
a
n
n
o
t
 
b
e
 
m
o
r
e
 
t
h
a
n
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
I
N
S
T
R
U
C
T
I
O
N
S
_
F
I
L
E
S
I
Z
E
_
P
O
S
T
'
,
 
"
 
i
n
 
s
i
z
e
.
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
'
,
 
"
C
h
o
o
s
e
 
t
h
e
 
r
e
s
o
u
r
c
e
 
y
o
u
 
w
a
n
t
 
t
o
 
u
p
l
o
a
d
 
i
m
a
g
e
s
 
f
o
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
S
P
E
C
I
F
I
C
'
,
 
"
S
p
e
c
i
f
i
c
 
r
e
s
o
u
r
c
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
E
D
I
A
_
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
_
A
L
R
E
A
D
Y
_
U
P
L
O
A
D
E
D
'
,
 
"
I
m
a
g
e
s
 
a
l
r
e
a
d
y
 
u
p
l
o
a
d
e
d
 
f
o
r
 
t
h
i
s
 
r
e
s
o
u
r
c
e
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
I
T
L
E
'
,
 
'
T
e
x
t
 
f
o
r
m
a
t
t
i
n
g
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
D
E
S
C
'
,
 
'
Y
o
u
 
c
a
n
 
e
n
t
e
r
 
t
e
x
t
 
h
e
r
e
 
u
s
i
n
g
 
s
i
m
p
l
e
 
M
a
r
k
d
o
w
n
 
f
o
r
m
a
t
t
i
n
g
.
 
Y
o
u
 
d
o
n
\
'
t
 
n
e
e
d
 
t
o
 
k
n
o
w
 
a
n
y
 
H
T
M
L
,
 
j
u
s
t
 
u
s
e
 
t
h
e
 
b
u
t
t
o
n
s
 
t
o
 
m
a
k
e
 
t
h
e
 
i
n
f
o
r
m
a
t
i
o
n
 
l
o
o
k
 
l
i
k
e
 
y
o
u
 
w
a
n
t
,
 
o
r
 
f
o
r
m
a
t
 
t
e
x
t
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
s
e
 
e
x
a
m
p
l
e
s
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
E
M
P
H
A
S
I
S
'
,
 
'
E
m
p
h
a
s
i
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
O
L
D
'
,
 
'
b
o
l
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
T
A
L
I
C
S
'
,
 
'
i
t
a
l
i
c
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
T
R
I
K
E
T
H
R
O
U
G
H
'
,
 
'
s
t
r
i
k
e
t
h
r
o
u
g
h
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
H
E
A
D
E
R
S
'
,
 
"
H
e
a
d
e
r
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
B
I
G
H
E
A
D
E
R
'
,
 
'
B
i
g
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
M
E
D
I
U
M
H
E
A
D
E
R
'
,
 
"
M
e
d
i
u
m
 
h
e
a
d
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
S
M
A
L
L
H
E
A
D
E
R
'
,
 
'
S
m
a
l
l
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
I
N
Y
H
E
A
D
E
R
'
,
 
'
T
i
n
y
 
h
e
a
d
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
S
T
S
'
,
 
"
L
i
s
t
s
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
G
E
N
E
R
I
C
L
I
S
T
I
T
E
M
'
,
 
'
G
e
n
e
r
i
c
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
N
U
M
B
E
R
E
D
L
I
S
T
I
T
E
M
'
,
 
'
N
u
m
b
e
r
e
d
 
l
i
s
t
 
i
t
e
m
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
S
'
,
 
'
L
i
n
k
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
L
I
N
K
S
T
E
X
T
'
,
 
'
T
e
x
t
 
t
o
 
d
i
s
p
l
a
y
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
S
'
,
 
'
Q
u
o
t
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
H
I
S
I
S
A
Q
U
O
T
E
'
,
 
'
T
h
i
s
 
i
s
 
a
 
q
u
o
t
e
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
Q
U
O
T
E
M
U
L
T
I
P
L
E
'
,
 
'
I
t
 
c
a
n
 
s
p
a
n
 
m
u
l
t
i
p
l
e
 
l
i
n
e
s
!
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
I
M
A
G
E
S
'
,
 
'
I
m
a
g
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
T
A
B
L
E
'
,
 
'
T
a
b
l
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
R
K
D
O
W
N
_
C
O
L
U
M
N
'
,
 
'
C
o
l
u
m
n
'
)
;



j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
'
,
 
'
S
h
o
w
 
p
r
o
p
e
r
t
y
 
i
m
a
g
e
s
 
a
s
 
s
l
i
d
e
s
h
o
w
 
i
n
 
p
r
o
p
e
r
t
y
 
l
i
s
t
?
'
)
;

j
r
_
d
e
f
i
n
e
(
'
P
R
O
P
E
R
T
Y
L
I
S
T
_
I
M
A
G
E
S
_
A
S
_
S
L
I
D
E
S
H
O
W
_
D
E
S
C
'
,
 
'
I
f
 
s
e
t
 
t
o
 
y
e
s
,
 
a
 
s
l
i
d
e
s
h
o
w
 
o
f
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
s
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
 
I
f
 
s
e
t
 
t
o
 
n
o
,
 
t
h
e
n
 
t
h
e
 
f
i
r
s
t
 
p
r
o
p
e
r
t
y
 
m
a
i
n
 
i
m
a
g
e
 
w
i
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
E
D
I
T
_
C
M
S
_
U
S
E
R
'
,
 
'
E
d
i
t
 
C
M
S
 
u
s
e
r
'
)
;


j
r
_
d
e
f
i
n
e
(
'
B
O
O
K
I
N
G
_
M
A
D
E
_
B
Y
'
,
 
'
B
o
o
k
i
n
g
 
m
a
d
e
 
b
y
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
U
T
E
R
_
F
E
A
T
U
R
E
S
'
,
 
'
A
m
e
n
i
t
i
e
s
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
U
T
E
R
_
R
O
O
M
T
Y
P
E
S
'
,
 
'
R
o
o
m
 
T
y
p
e
s
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
'
,
 
'
E
x
t
e
r
n
a
l
 
b
o
o
k
i
n
g
 
f
o
r
m
 
U
R
L
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
F
O
R
M
_
E
X
T
E
R
N
A
L
_
U
R
L
_
D
E
S
C
'
,
 
'
H
e
r
e
 
y
o
u
 
c
a
n
 
s
e
t
 
a
n
 
e
x
t
e
r
n
a
l
 
U
R
L
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
a
 
3
r
d
 
p
a
r
t
y
 
w
e
b
s
i
t
e
 
f
o
r
 
m
a
k
i
n
g
 
b
o
o
k
i
n
g
s
.
 
A
l
l
 
j
o
m
r
e
s
 
b
o
o
k
i
n
g
 
b
u
t
t
o
n
s
 
w
i
l
l
 
p
o
i
n
t
 
t
o
 
t
h
i
s
 
U
R
L
.
 
L
e
a
v
e
 
t
h
i
s
 
f
i
e
l
d
 
b
l
a
n
k
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
e
 
J
o
m
r
e
s
 
b
o
o
k
i
n
g
 
f
o
r
m
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
_
T
A
G
L
I
N
E
'
,
 
'
T
a
g
l
i
n
e
 
(
s
h
o
r
t
 
r
o
o
m
 
d
e
s
c
r
i
p
t
i
o
n
/
s
u
b
t
i
t
l
e
)
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
R
o
o
m
 
D
e
s
c
r
i
p
t
i
o
n
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
'
,
 
'
G
u
e
s
t
 
b
l
a
c
k
l
i
s
t
e
d
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
G
U
E
S
T
_
B
L
A
C
K
L
I
S
T
E
D
_
D
E
S
C
'
,
 
'
I
f
 
t
h
i
s
 
g
u
e
s
t
 
i
s
 
b
l
a
c
k
 
l
i
s
t
e
d
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
n
o
 
l
o
n
g
e
r
 
b
e
 
a
b
l
e
 
t
o
 
m
a
k
e
 
b
o
o
k
i
n
g
s
 
i
n
 
t
h
i
s
 
p
r
o
p
e
r
t
y
.
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
'
,
 
'
S
e
s
s
i
o
n
 
h
a
n
d
l
e
r
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
E
S
S
I
O
N
_
H
A
N
D
L
E
R
_
D
E
S
C
'
,
 
'
S
a
v
e
 
j
o
m
r
e
s
 
s
e
s
s
i
o
n
 
f
i
l
e
s
 
t
o
 
d
i
s
k
 
o
r
 
t
o
 
d
a
t
a
b
a
s
e
.
 
R
e
c
o
m
m
e
n
d
e
d
:
 
d
a
t
a
b
a
s
e
'
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
H
E
I
G
H
T
'
,
"
M
a
p
 
h
e
i
g
h
t
 
(
p
x
)
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
Z
O
O
M
L
E
V
E
L
'
,
"
M
a
p
 
z
o
o
m
 
l
e
v
e
l
 
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
M
A
P
_
M
A
P
T
Y
P
E
'
,
"
M
a
p
 
t
y
p
e
 
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
'
,
"
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
 
M
a
n
a
g
e
r
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
L
E
A
D
'
,
"
T
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
s
 
a
r
e
 
p
l
u
g
i
n
s
 
t
h
a
t
 
c
a
n
 
p
r
o
v
i
d
e
 
o
v
e
r
r
i
d
e
 
t
e
m
p
l
a
t
e
s
 
f
o
r
 
v
a
r
i
o
u
s
 
c
o
r
e
 
J
o
m
r
e
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
O
'
,
"
T
h
i
s
 
p
a
g
e
 
l
i
s
t
s
 
a
n
y
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
o
v
e
r
r
i
d
d
e
n
 
b
y
 
a
 
t
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
'
s
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.
 
I
f
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
a
 
c
e
r
t
a
i
n
 
t
e
m
p
l
a
t
e
 
f
i
l
e
,
 
c
l
i
c
k
 
o
n
 
t
h
e
 
e
d
i
t
 
b
u
t
t
o
n
 
f
o
r
 
t
h
a
t
 
f
i
l
e
,
 
o
n
 
t
h
e
 
n
e
x
t
 
p
a
g
e
 
y
o
u
 
w
i
l
l
 
b
e
 
a
b
l
e
 
t
o
 
c
h
o
o
s
e
 
w
h
i
c
h
 
v
e
r
s
i
o
n
 
y
o
u
 
w
a
n
t
 
t
o
 
o
v
e
r
r
i
d
e
 
w
i
t
h
.
 
N
o
t
e
,
 
t
h
e
s
e
 
o
v
e
r
r
i
d
e
s
 
t
a
k
e
 
p
r
i
o
r
i
t
y
 
o
v
e
r
 
b
o
t
h
 
J
o
m
r
e
s
 
C
o
r
e
 
a
n
d
 
a
n
y
 
W
o
r
d
p
r
e
s
s
 
o
r
 
J
o
o
m
l
a
 
t
h
e
m
e
/
t
e
m
p
l
a
t
e
 
o
v
e
r
r
i
d
e
s
.
 
Y
o
u
 
c
a
n
 
d
i
s
a
b
l
e
 
a
n
 
o
v
e
r
r
i
d
e
 
b
y
 
d
e
l
e
t
i
n
g
 
i
t
 
i
n
 
t
h
e
 
L
i
s
t
 
T
e
m
p
l
a
t
e
 
O
v
e
r
r
i
d
e
s
 
p
a
g
e
.
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
A
M
E
'
,
"
T
e
m
p
l
a
t
e
 
n
a
m
e
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
P
A
T
H
'
,
"
C
u
r
r
e
n
t
 
p
a
t
h
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
O
T
_
O
V
E
R
R
I
D
D
E
N
'
,
"
N
o
t
 
o
v
e
r
r
i
d
d
e
n
"
)
;

j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
E
D
I
T
_
I
N
F
O
'
,
"
Y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
w
h
i
c
h
 
t
e
m
p
l
a
t
e
 
f
i
l
e
 
t
o
 
o
v
e
r
r
i
d
e
 
t
h
e
 
C
o
r
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
 
b
y
 
c
h
a
n
g
i
n
g
 
t
h
e
 
d
r
o
p
d
o
w
n
"
)
;



j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
"
P
e
r
c
e
n
t
a
g
e
 
R
o
o
m
s
 
B
o
o
k
e
d
"
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
N
E
W
_
P
R
O
P
E
R
T
Y
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
c
r
e
a
t
e
 
n
e
w
 
p
r
o
p
e
r
t
y
 
f
o
r
m
.
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
P
R
O
P
E
R
T
Y
_
M
A
P
_
Z
O
O
M
'
,
 
'
M
a
p
 
z
o
o
m
,
 
1
:
 
W
o
r
l
d
 
5
:
 
L
a
n
d
m
a
s
s
/
c
o
n
t
i
n
e
n
t
 
1
0
:
 
C
i
t
y
 
1
5
:
 
S
t
r
e
e
t
s
 
2
0
:
 
B
u
i
l
d
i
n
g
s
 
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
R
E
V
I
E
W
S
_
L
I
M
I
T
'
,
 
'
N
u
m
b
e
r
 
o
f
 
r
e
v
i
e
w
s
 
t
o
 
s
h
o
w
'
)
;


j
r
_
d
e
f
i
n
e
(
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
R
T
L
I
S
T
'
,
 
'
D
i
s
p
l
a
y
s
 
t
h
e
 
u
s
e
r
s
 
s
h
o
r
t
l
i
s
t
e
d
 
p
r
o
p
e
r
t
i
e
s
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
r
e
g
i
s
t
e
r
e
d
 
t
h
e
s
e
 
a
r
e
 
t
h
e
i
r
 
f
a
v
o
u
r
i
t
e
s
,
 
i
f
 
n
o
t
 
l
o
g
g
e
d
 
i
n
 
t
h
e
n
 
j
u
s
t
 
t
h
o
s
e
 
i
t
e
m
s
 
a
d
d
e
d
 
t
h
r
o
u
g
h
 
t
h
e
 
F
a
v
o
u
r
i
t
e
 
i
c
o
n
 
d
u
r
i
n
g
 
t
h
e
 
v
i
s
i
t
.
'
)
;


j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
,
 
'
M
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
v
a
l
u
e
'
 
)
;

j
r
_
d
e
f
i
n
e
(
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
_
D
E
S
C
'
,
 
"
I
f
 
t
h
e
 
c
a
l
c
u
l
a
t
e
d
 
d
e
p
o
s
i
t
 
i
s
 
l
e
s
s
 
t
h
a
n
 
t
h
i
s
 
f
i
g
u
r
e
,
 
t
h
e
n
 
s
e
t
 
d
e
p
o
s
i
t
 
t
o
 
t
h
i
s
 
v
a
l
u
e
 
i
n
s
t
e
a
d
.
 
T
h
i
s
 
f
i
g
u
r
e
 
m
i
g
h
t
 
i
t
s
e
l
f
 
b
e
 
o
v
e
r
-
r
i
d
d
e
n
 
i
f
 
i
t
 
d
o
e
s
 
n
o
t
 
s
a
t
i
s
f
y
 
t
h
e
 
s
i
t
e
'
s
 
m
i
n
i
m
u
m
 
d
e
p
o
s
i
t
 
s
e
t
t
i
n
g
.
 
L
e
a
v
e
 
i
t
 
s
e
t
 
t
o
 
0
 
t
o
 
n
o
t
 
u
s
e
 
t
h
e
 
s
e
t
t
i
n
g
.
"
 
)
;

