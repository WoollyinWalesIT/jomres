
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


$
m
r
C
o
n
f
i
g
 
=
 
a
r
r
a
y
(

 
 
'
n
e
w
T
a
r
i
f
f
M
o
d
e
l
s
'
 
=
>
 
'
2
'
,

 
 
'
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
'
 
=
>
 
'
0
'
,

 
 
'
s
i
n
g
l
e
P
e
r
s
o
n
S
u
p
p
l
i
m
e
n
t
C
o
s
t
'
 
=
>
 
'
1
0
'
,

 
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
=
>
 
'
0
'
,

 
 
'
d
e
p
o
s
i
t
I
s
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
'
 
=
>
 
'
1
'
,

 
 
'
d
e
p
o
s
i
t
V
a
l
u
e
'
 
=
>
 
'
2
0
'
,

 
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
=
>
 
'
0
'
,

 
 
'
j
o
m
r
e
s
d
o
t
n
e
t
'
 
=
>
 
'
w
w
w
.
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
'
,

 
 
'
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
=
>
 
'
1
'
,

 
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
=
>
 
'
0
'
,

 
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
'
 
=
>
 
'
7
'
,

 
 
'
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
'
 
=
>
 
'
4
'
,

 
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
=
>
 
'
0
'
,

 
 
'
f
i
x
e
d
A
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
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
=
>
 
'
0
'
,

 
 
'
s
h
o
w
A
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
C
a
l
e
n
d
a
r
'
 
=
>
 
'
1
'
,

 
 
'
a
v
l
c
a
l
_
t
o
d
a
y
c
o
l
o
r
'
 
=
>
 
'
#
C
C
0
0
0
0
'
,

 
 
'
a
v
l
c
a
l
_
i
n
m
o
n
t
h
f
a
c
e
'
 
=
>
 
'
#
0
0
0
0
0
0
'
,

 
 
'
a
v
l
c
a
l
_
o
u
t
m
o
n
f
a
c
e
'
 
=
>
 
'
#
6
6
6
6
6
6
'
,

 
 
'
a
v
l
c
a
l
_
i
n
b
g
c
o
l
o
u
r
'
 
=
>
 
'
#
6
A
F
B
9
2
'
,

 
 
'
a
v
l
c
a
l
_
o
u
t
b
g
c
o
l
o
u
r
'
 
=
>
 
'
#
F
F
C
C
F
F
'
,

 
 
'
a
v
l
c
a
l
_
o
c
c
u
p
i
e
d
c
o
l
o
u
r
'
 
=
>
 
'
#
F
F
0
0
0
0
'
,

 
 
'
a
v
l
c
a
l
_
p
r
o
v
i
s
i
o
n
a
l
c
o
l
o
u
r
'
 
=
>
 
'
#
F
F
F
C
1
7
'
,

 
 
'
s
h
o
w
R
o
o
m
s
L
i
s
t
i
n
g
L
i
n
k
'
 
=
>
 
'
1
'
,

 
 
'
c
f
o
r
m
a
t
'
 
=
>
 
'
2
'
,

 
 
'
w
e
e
k
e
n
d
d
a
y
s
'
 
=
>
 
'
5
,
6
'
,

 
 
'
a
v
l
c
a
l
_
b
l
a
c
k
'
 
=
>
 
'
#
B
E
B
E
B
E
'
,

 
 
'
a
v
l
c
a
l
_
b
o
o
k
i
n
g
'
 
=
>
 
'
g
r
e
e
n
'
,

 
 
'
a
v
l
c
a
l
_
p
a
s
t
c
o
l
o
u
r
'
 
=
>
 
'
#
B
E
B
E
B
E
'
,

 
 
'
a
v
l
c
a
l
_
w
e
e
k
e
n
d
b
o
r
d
e
r
'
 
=
>
 
'
#
B
E
B
E
B
E
'
,

 
 
'
c
a
l
_
o
u
t
p
u
t
'
 
=
>
 
'
j
S
 
M
 
Y
'
,

 
 
'
c
a
l
_
i
n
p
u
t
'
 
=
>
 
'
%
d
/
%
m
/
%
Y
'
,

 
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
'
 
=
>
 
'
4
'
,

 
 
'
s
h
o
w
E
x
t
r
a
s
'
 
=
>
 
'
1
'
,

 
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
'
 
=
>
 
'
9
0
'
,

 
 
'
r
o
o
m
T
a
x
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
r
o
o
m
T
a
x
F
i
x
e
d
'
 
=
>
 
'
0
'
,

 
 
'
r
o
o
m
T
a
x
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
'
 
=
>
 
'
0
'
,

 
 
'
e
u
r
o
T
a
x
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
e
u
r
o
T
a
x
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
'
 
=
>
 
'
0
'
,

 
 
'
e
d
i
t
i
n
g
O
n
'
 
=
>
 
'
0
'
,

 
 
'
d
e
p
A
m
o
u
n
t
'
 
=
>
 
'
0
'
,

 
 
'
C
a
l
e
n
d
a
r
M
o
n
t
h
s
T
o
S
h
o
w
'
 
=
>
 
'
1
2
'
,

 
 
'
e
n
c
K
e
y
'
 
=
>
 
'
'
,

 
 
'
e
d
i
t
i
c
o
n
s
i
z
e
'
 
=
>
 
'
s
m
a
l
l
'
,

 
 
'
s
h
o
w
T
a
r
i
f
f
s
L
i
n
k
'
 
=
>
 
'
0
'
,

 
 
'
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
'
 
=
>
 
'
1
'
,

 
 
'
r
a
t
e
m
u
l
t
i
p
l
i
e
r
'
 
=
>
 
'
1
'
,

 
 
'
d
a
t
e
F
o
r
m
a
t
S
t
y
l
e
'
 
=
>
 
'
1
'
,

 
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
L
i
n
k
'
 
=
>
 
'
0
'
,

 
 
'
s
h
o
w
S
l
i
d
e
s
h
o
w
I
n
l
i
n
e
'
 
=
>
 
'
1
'
,

 
 
'
s
h
o
w
T
a
r
i
f
f
s
I
n
l
i
n
e
'
 
=
>
 
'
1
'
,

 
 
'
i
n
p
u
t
B
o
x
E
r
r
o
r
B
a
c
k
g
r
o
u
n
d
'
 
=
>
 
'
#
f
c
e
3
1
d
'
,

 
 
'
d
e
f
a
u
l
t
c
o
u
n
t
r
y
'
 
=
>
 
'
G
B
'
,

 
 
'
c
a
l
s
t
a
r
t
f
r
o
m
b
e
g
i
n
n
i
n
g
o
f
y
e
a
r
'
 
=
>
 
'
0
'
,

 
 
'
s
h
o
w
G
o
o
g
l
e
C
u
r
r
e
n
c
y
L
i
n
k
'
 
=
>
 
'
1
'
,

 
 
'
c
u
r
r
e
n
c
y
C
o
d
e
s
'
 
=
>
 
'
'
,

 
 
'
s
h
o
w
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
D
e
t
a
i
l
s
'
 
=
>
 
'
1
'
,

 
 
'
s
h
o
w
O
n
l
y
A
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
C
a
l
e
n
d
a
r
'
 
=
>
 
'
0
'
,

 
 
'
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
=
>
 
'
1
'
,

 
 
'
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
'
 
=
>
 
'
1
'
,

 
 
'
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
'
 
=
>
 
'
2
'
,

 
 
'
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
U
s
e
r
s
O
n
l
y
C
a
n
B
o
o
k
'
 
=
>
 
'
0
'
,

 
 
'
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
=
>
 
'
1
'
,

 
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
=
>
 
'
0
'
,

 
 
'
f
i
x
e
d
A
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
s
R
e
c
u
r
r
i
n
g
'
 
=
>
 
'
1
2
'
,

 
 
'
i
n
p
u
t
B
o
x
O
k
t
o
b
o
o
k
B
a
c
k
g
r
o
u
n
d
'
 
=
>
 
'
#
1
1
f
f
2
2
'
,

 
 
'
s
u
p
p
l
i
m
e
n
t
C
h
a
r
g
e
I
s
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
'
 
=
>
 
'
0
'
,

 
 
'
r
e
t
u
r
n
R
o
o
m
s
L
i
m
i
t
'
 
=
>
 
'
1
'
,

 
 
'
t
a
r
i
f
f
m
o
d
e
'
 
=
>
 
'
0
'
,

 
 
'
r
o
o
m
s
l
i
s
t
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
d
e
t
a
i
l
s
'
 
=
>
 
'
1
'
,

 
 
'
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
 
=
>
 
'
0
'
,

 
 
'
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
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
o
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
o
o
m
l
i
s
t
_
s
h
o
w
r
o
o
m
n
a
m
e
'
 
=
>
 
'
0
'
,

 
 
'
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
_
r
o
o
m
l
i
s
t
_
s
h
o
w
t
a
r
i
f
f
t
i
t
l
e
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
t
i
t
l
e
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
d
e
s
c
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
r
a
t
e
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
s
t
a
r
t
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
e
n
d
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
d
a
y
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
d
a
y
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
i
n
p
e
e
p
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
t
a
r
i
f
f
_
m
a
x
p
e
e
p
s
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
n
u
m
b
e
r
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
n
a
m
e
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
t
y
p
e
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
f
l
o
o
r
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
m
a
x
p
e
o
p
l
e
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
f
e
a
t
u
r
e
s
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
n
a
m
e
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
u
r
n
a
m
e
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
h
o
u
s
e
n
o
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
s
t
r
e
e
t
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
o
w
n
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
p
o
s
t
c
o
d
e
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
r
e
g
i
o
n
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
c
o
u
n
t
r
y
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
t
e
l
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
m
o
b
i
l
e
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
e
q
u
i
r
e
d
f
i
e
l
d
s
_
e
m
a
i
l
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
o
o
m
l
i
s
t
_
s
h
o
w
d
i
s
a
b
l
e
d
'
 
=
>
 
'
1
'
,

 
 
'
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
_
r
o
o
m
l
i
s
t
_
s
h
o
w
m
a
x
p
e
o
p
l
e
'
 
=
>
 
'
1
'
,

 
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
=
>
 
'
1
'
,

 
 
'
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
=
>
 
'
0
'
,

 
 
'
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
_
t
h
r
e
a
s
h
o
l
d
'
 
=
>
 
'
6
0
'
,

 
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
=
>
 
'
0
'
,

 
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
=
>
 
'
E
U
R
'
,

 
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
=
>
 
'
0
'
,

 
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
=
>
 
'
2
'
,

 
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
=
>
 
'
D
'
,

 
 
'
s
h
o
w
R
o
o
m
I
m
a
g
e
I
n
B
o
o
k
i
n
g
F
o
r
m
O
v
e
r
l
i
b
'
 
=
>
 
'
2
'
,

 
 
'
t
a
r
i
f
f
s
e
n
h
a
n
c
e
d
d
e
f
a
u
l
t
'
 
=
>
 
'
1
0
0
'
,

 
 
'
t
a
r
i
f
f
s
e
n
h
a
n
c
e
d
y
e
a
r
s
t
o
s
h
o
w
'
 
=
>
 
'
2
'
,

 
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
=
>
 
'
0
'
,

 
 
'
c
a
n
c
e
l
l
a
t
i
o
n
_
t
h
r
e
a
s
h
o
l
d
'
 
=
>
 
'
1
4
'
,

 
 
'
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
=
>
 
'
0
'
,

 
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
=
>
 
'
1
'
,

 
 
'
p
r
o
p
e
r
t
y
_
l
a
n
g
u
a
g
e
'
 
=
>
 
'
e
n
-
G
B
'
,

 
 
'
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
'
 
=
>
 
'
'
,

 
 
'
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
=
>
 
'
0
'
,

 
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
 
=
>
 
'
'
,

 
 
'
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
=
>
 
'
0
'
,

 
 
'
s
h
o
w
P
f
e
a
t
u
r
e
s
C
a
t
e
g
o
r
i
e
s
'
 
=
>
 
'
1
'
,

 
 
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
 
=
>
 
'
0
'
,

 
 
'
f
a
c
e
b
o
o
k
_
p
a
g
e
'
 
=
>
 
'
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
d
i
s
a
b
l
e
d
a
c
c
e
s
s
_
s
h
o
w
'
 
=
>
 
'
1
'
,

 
 
'
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
_
o
v
e
r
l
i
b
_
r
o
o
m
_
s
m
o
k
i
n
g
_
s
h
o
w
'
 
=
>
 
'
0
'
,

 
 
'
d
e
f
a
u
l
t
S
m
o
k
i
n
g
O
p
t
i
o
n
'
 
=
>
 
'
2
'
,

 
 
'
s
h
o
w
S
m
o
k
i
n
g
'
 
=
>
 
'
0
'
,

 
 
'
u
s
e
O
n
l
i
n
e
p
a
y
m
e
n
t
'
 
=
>
 
'
0
'
,

 
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
e
r
c
e
n
t
a
g
e
'
 
=
>
 
'
0
'
,

 
 
'
e
x
t
e
r
n
a
l
B
o
o
k
i
n
g
F
o
r
m
U
r
l
'
 
=
>
 
'
'
,

 
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
=
>
 
0
,

 
 
'
p
o
a
_
p
r
i
c
e
'
 
=
>
 
'
'
,

 
 
'
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
'
 
=
>
 
'
0
'

)
;

