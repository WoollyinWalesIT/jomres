
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


$
j
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
v
e
r
s
i
o
n
'
 
=
>
 
'
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
C
r
a
t
e
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
i
s
t
_
l
i
m
i
t
'
 
=
>
 
'
9
'
,

 
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
=
>
 
'
1
'
,

 
 
'
g
l
o
b
a
l
C
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
g
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
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
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
P
r
o
p
e
r
t
i
e
s
'
 
=
>
 
'
0
'
,

 
 
'
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
'
 
=
>
 
'
1
'
,

 
 
'
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
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
d
u
m
p
T
e
m
p
l
a
t
e
'
 
=
>
 
'
0
'
,

 
 
'
m
a
x
w
i
d
t
h
'
 
=
>
 
'
9
0
0
'
,

 
 
'
f
i
l
e
S
i
z
e
'
 
=
>
 
'
5
0
0
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
L
i
s
t
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
2
0
'
,

 
 
'
r
a
n
d
o
m
s
e
a
r
c
h
l
i
m
i
t
'
 
=
>
 
'
5
0
0
0
'
,

 
 
'
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
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
u
s
e
G
l
o
b
a
l
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
 
=
>
 
'
1
'
,

 
 
'
d
y
n
a
m
i
c
M
i
n
I
n
t
e
r
v
a
l
R
e
c
a
l
c
u
l
a
t
i
o
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
i
s
a
b
l
e
A
u
d
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
a
l
l
o
w
e
d
T
a
g
s
'
 
=
>
 
'
|
|
|
|
|
|
|
|
|
;
p
r
e
&
#
3
8
;
#
3
8
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
#
6
2
;
|
|
|
|
;
p
&
#
3
8
;
#
3
8
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
a
m
p
;
#
6
2
;
'
,

 
 
'
e
m
a
i
l
E
r
r
o
r
s
'
 
=
>
 
'
0
'
,

 
 
'
c
o
m
p
o
s
i
t
e
_
p
r
o
p
e
r
t
y
_
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
e
n
a
b
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
u
s
e
C
o
l
s
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
e
c
o
l
s
'
 
=
>
 
'
3
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
e
l
e
c
t
c
o
m
b
o
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
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
_
d
r
o
p
d
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
=
>
 
'
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
_
d
r
o
p
d
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
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
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
c
a
t
e
g
o
r
y
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
_
d
r
o
p
d
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
d
r
o
p
d
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
e
s
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
d
r
o
p
d
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
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
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
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
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
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
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
s
'
 
=
>
 
'
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
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
_
i
n
c
r
e
m
e
n
t
s
'
 
=
>
 
'
2
0
'
,

 
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
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
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
t
a
r
s
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
L
a
n
g
D
r
o
p
d
o
w
n
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
J
o
m
r
e
s
M
e
s
s
a
g
i
n
g
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
S
u
b
s
c
r
i
p
t
i
o
n
s
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
N
e
w
u
s
e
r
s
'
 
=
>
 
'
0
'
,

 
 
'
b
u
s
i
n
e
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
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
0
6
1
'
,

 
 
'
b
u
s
i
n
e
s
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
G
B
'
,

 
 
'
b
u
s
i
n
e
s
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
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
s
_
t
e
l
e
p
h
o
n
e
'
 
=
>
 
'
B
L
A
N
K
'
,

 
 
'
b
u
s
i
n
e
s
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
B
L
A
N
K
'
,

 
 
'
c
o
n
t
a
c
t
_
o
w
n
e
r
_
e
m
a
i
l
s
_
t
o
_
a
l
t
e
r
n
a
t
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
c
o
n
t
a
c
t
_
o
w
n
e
r
_
e
m
a
i
l
s
_
t
o
_
a
l
t
e
r
n
a
t
i
v
e
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
'
,

 
 
'
i
s
_
s
i
n
g
l
e
_
p
r
o
p
e
r
t
y
_
i
n
s
t
a
l
l
a
t
i
o
n
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
_
h
t
m
l
_
p
u
r
i
f
i
e
r
'
 
=
>
 
'
0
'
,

 
 
'
l
i
m
i
t
_
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
0
'
,

 
 
'
l
i
m
i
t
_
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
o
u
n
t
r
y
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
G
B
'
,

 
 
'
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
=
>
 
'
b
a
s
e
'
,

 
 
'
u
s
e
_
r
e
v
i
e
w
s
'
 
=
>
 
'
1
'
,

 
 
'
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
'
 
=
>
 
'
1
'
,

 
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
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
s
h
o
w
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
_
i
n
_
p
r
o
p
e
r
t
y
_
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
0
'
,

 
 
'
s
e
a
r
c
h
_
o
r
d
e
r
_
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
'
,

 
 
'
s
h
o
w
_
s
e
a
r
c
h
_
o
r
d
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
'
 
=
>
 
'
1
'
,

 
 
'
o
n
l
y
_
g
u
e
s
t
s
_
c
a
n
_
r
e
v
i
e
w
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
t
i
m
e
z
o
n
e
_
s
w
i
t
c
h
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
l
o
a
d
_
j
q
u
e
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
t
h
u
m
b
n
a
i
l
_
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
i
s
t
_
m
a
x
_
w
i
d
t
h
'
 
=
>
 
'
2
5
0
'
,

 
 
'
t
h
u
m
b
n
a
i
l
_
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
i
s
t
_
m
a
x
_
h
e
i
g
h
t
'
 
=
>
 
'
1
4
0
'
,

 
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
w
i
d
t
h
'
 
=
>
 
'
4
0
0
'
,

 
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
h
e
i
g
h
t
'
 
=
>
 
'
2
2
5
'
,

 
 
'
u
s
e
_
c
o
m
m
i
s
s
i
o
n
'
 
=
>
 
'
0
'
,

 
 
'
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
s
_
t
r
i
g
g
e
r
_
c
o
m
m
i
s
s
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
c
o
m
m
i
s
s
i
o
n
_
a
u
t
o
s
u
s
p
e
n
d
_
o
n
_
o
v
e
r
d
u
e
'
 
=
>
 
'
1
'
,

 
 
'
c
o
m
m
i
s
s
i
o
n
_
a
u
t
o
s
u
s
p
e
n
d
_
o
n
_
o
v
e
r
d
u
e
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
=
>
 
'
0
'
,

 
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
'
 
=
>
 
'
1
'
,

 
 
'
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
e
a
r
c
h
'
 
=
>
 
'
g
r
e
a
t
e
r
t
h
a
n
'
,

 
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
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
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
 
=
>
 
'
1
'
,

 
 
'
g
e
o
l
o
c
a
t
i
o
n
_
a
p
i
_
k
e
y
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
_
f
o
r
m
_
m
o
d
a
l
_
p
o
p
u
p
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
t
o
t
a
l
s
p
a
n
e
l
_
p
o
s
i
t
i
o
n
'
 
=
>
 
'
4
5
5
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
w
i
d
t
h
'
 
=
>
 
'
4
5
0
'
,

 
 
'
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
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
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
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
s
m
t
p
_
u
s
e
_
s
e
t
t
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
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
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
s
m
t
p
_
h
o
s
t
'
 
=
>
 
'
'
,

 
 
'
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
s
m
t
p
_
p
o
r
t
'
 
=
>
 
'
'
,

 
 
'
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
s
m
t
p
_
p
r
o
t
o
c
o
l
'
 
=
>
 
'
'
,

 
 
'
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
s
m
t
p
_
u
s
e
r
n
a
m
e
'
 
=
>
 
'
'
,

 
 
'
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
s
m
t
p
_
p
a
s
s
w
o
r
d
'
 
=
>
 
'
'
,

 
 
'
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
a
i
n
m
e
n
u
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
c
e
n
s
e
_
s
e
r
v
e
r
_
u
s
e
r
n
a
m
e
'
 
=
>
 
'
'
,

 
 
'
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
p
a
s
s
w
o
r
d
'
 
=
>
 
'
'
,

 
 
'
u
s
e
s
h
o
p
p
i
n
g
c
a
r
t
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
_
l
a
t
'
 
=
>
 
'
5
1
.
5
0
0
6
8
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
_
l
o
n
g
'
 
=
>
 
'
-
0
.
1
4
3
1
7
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
_
f
r
o
m
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
'
,

 
 
'
s
a
f
e
_
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
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
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
_
l
o
c
k
_
t
i
m
e
o
u
t
'
 
=
>
 
'
3
6
0
0
'
,

 
 
'
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
 
=
>
 
'
s
t
r
o
n
g
'
,

 
 
'
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
'
 
=
>
 
'
p
[
c
l
a
s
s
]
,
b
,
s
t
r
o
n
g
,
a
[
h
r
e
f
]
,
i
,
e
m
,
i
m
g
[
s
r
c
]
,
u
l
,
l
i
,
h
1
[
c
l
a
s
s
]
,
t
a
b
l
e
[
w
i
d
t
h
]
,
t
a
b
l
e
[
b
o
r
d
e
r
]
,
t
r
,
t
d
,
t
h
,
b
r
'
,

 
 
'
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
'
 
=
>
 
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
h
e
c
k
i
n
_
t
i
m
e
s
 
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
p
r
o
p
e
r
t
y
_
d
r
i
v
i
n
g
_
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
 
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
 
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
e
m
a
i
l
_
t
e
x
t
 
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
 
r
o
o
m
_
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
d
e
t
a
i
l
s
_
i
n
_
t
a
b
s
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
l
i
s
t
_
l
a
y
o
u
t
_
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
t
i
l
e
'
,

 
 
'
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
_
a
p
p
r
o
v
e
_
n
e
w
_
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
'
 
=
>
 
'
1
'
,

 
 
'
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
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
u
s
e
_
b
o
o
t
s
t
r
a
p
_
i
n
_
f
r
o
n
t
e
n
d
'
 
=
>
 
'
1
'
,

 
 
'
r
e
c
a
p
t
c
h
a
_
p
u
b
l
i
c
_
k
e
y
'
 
=
>
 
'
'
,

 
 
'
r
e
c
a
p
t
c
h
a
_
p
r
i
v
a
t
e
_
k
e
y
'
 
=
>
 
'
'
,

 
 
'
u
s
e
_
b
o
o
t
s
t
r
a
p
_
i
n
_
a
d
m
i
n
'
 
=
>
 
'
0
'
,

 
 
'
g
m
a
p
_
p
o
i
s
'
 
=
>
 
'
0
'
,

 
 
'
g
m
a
p
_
l
a
y
e
r
_
w
e
a
t
h
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
g
m
a
p
_
l
a
y
e
r
_
p
a
n
o
r
a
m
i
o
'
 
=
>
 
'
0
'
,

 
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
'
 
=
>
 
'
0
'
,

 
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
f
f
i
c
'
 
=
>
 
'
0
'
,

 
 
'
g
m
a
p
_
l
a
y
e
r
_
b
i
c
y
c
l
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
g
m
a
p
_
l
a
y
e
r
_
t
e
m
p
e
r
a
t
u
r
e
_
g
r
a
d
'
 
=
>
 
'
C
E
L
C
I
U
S
'
,

 
 
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
 
=
>
 
'
p
r
o
d
u
c
t
i
o
n
'
,

 
 
'
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
'
 
=
>
 
'
c
o
m
p
o
n
e
n
t
_
a
r
e
a
'
,

 
 
'
n
a
v
b
a
r
_
i
n
v
e
r
s
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
t
s
t
r
a
p
_
v
e
r
s
i
o
n
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
_
p
o
w
e
r
e
d
_
b
y
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
b
u
d
g
e
t
_
f
e
a
t
u
r
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
p
d
a
t
e
_
t
i
m
e
'
 
=
>
 
'
'
,

 
 
'
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
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
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
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
l
i
c
e
n
s
e
k
e
y
'
 
=
>
 
'
'
,

 
 
'
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
_
k
e
y
'
 
=
>
 
'
'
,

 
 
'
s
u
b
s
c
r
i
p
t
i
o
n
P
a
c
k
a
g
e
P
r
i
c
e
I
n
c
l
u
d
e
s
T
a
x
'
 
=
>
 
'
1
'
,

 
 
'
s
u
b
s
c
r
i
p
t
i
o
n
S
e
n
d
R
e
m
i
n
d
e
r
E
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
s
u
b
s
c
r
i
p
t
i
o
n
S
e
n
d
R
e
m
i
n
d
e
r
E
m
a
i
l
D
a
y
s
'
 
=
>
 
'
1
0
'
,

 
 
'
s
u
b
s
c
r
i
p
t
i
o
n
S
e
n
d
E
x
p
i
r
a
t
i
o
n
E
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
f
e
a
t
u
r
e
d
_
l
i
s
t
i
n
g
s
_
e
m
p
h
a
s
i
s
'
 
=
>
 
'
'
,

 
 
'
o
v
e
r
r
i
d
e
_
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
o
n
t
a
c
t
_
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
0
'
,

 
 
'
o
v
e
r
r
i
d
e
_
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
o
n
t
a
c
t
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
'
,

 
 
'
o
v
e
r
r
i
d
e
_
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
o
n
t
a
c
t
_
t
e
l
'
 
=
>
 
'
'
,

 
 
'
o
v
e
r
r
i
d
e
_
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
o
n
t
a
c
t
_
f
a
x
'
 
=
>
 
'
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
l
o
g
_
p
a
t
h
'
 
=
>
 
'
'
,

 
 
'
m
a
p
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
u
l
t
r
a
l
i
g
h
t
'
,

 
 
'
s
y
s
l
o
g
_
h
o
s
t
'
 
=
>
 
'
'
,

 
 
'
s
y
s
l
o
g
_
p
o
r
t
'
 
=
>
 
'
'
,

 
 
'
s
e
n
d
E
r
r
o
r
E
m
a
i
l
s
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
'
,

 
 
'
p
l
i
s
t
_
i
m
a
g
e
s
_
a
s
_
s
l
i
d
e
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
c
r
o
n
_
m
e
t
h
o
d
'
 
=
>
 
'
M
i
n
i
c
o
m
p
o
n
e
n
t
'
,

 
 
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
 
=
>
 
'
d
a
t
a
b
a
s
e
'
,

 
 
'
m
a
p
_
t
y
p
e
'
 
=
>
 
'
R
O
A
D
M
A
P
'
,

 
 
'
m
a
p
_
z
o
o
m
'
 
=
>
 
'
1
0
'
,

 
 
'
m
a
p
_
h
e
i
g
h
t
'
 
=
>
 
'
3
0
0
'
,

 
 
'
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
s
'
 
=
>
 
'
'
,

 
 
'
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
'
 
=
>
 
'
2
/
3
 
1
/
3
'
,

 
 
'
r
e
v
i
e
w
s
_
l
i
m
i
t
'
 
=
>
 
'
2
'
,

 
 
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
 
=
>
 
'
0
'
,

 
 
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
s
3
'
 
=
>
 
'
0
'
,

 
 
'
a
m
a
z
o
n
_
s
3
_
a
c
t
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
a
m
a
z
o
n
_
s
3
_
k
e
y
'
 
=
>
 
'
'
,

 
 
'
a
m
a
z
o
n
_
s
3
_
s
e
c
r
e
t
'
 
=
>
 
'
'
,

 
 
'
a
m
a
z
o
n
_
s
3
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
u
s
-
e
a
s
t
-
1
'
,

 
 
'
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
 
=
>
 
'
'
,

 
 
'
a
m
a
z
o
n
_
c
l
o
u
d
f
r
o
n
t
_
d
o
m
a
i
n
'
 
=
>
 
'
'
,

 
 
'
a
m
a
z
o
n
_
s
3
_
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
s
'
 
=
>
 
'
0
'
,

 
 
'
a
m
a
z
o
n
_
s
3
_
u
s
e
_
t
l
s
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
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
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
_
r
e
v
i
e
w
_
l
e
f
t
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
v
i
e
w
_
n
a
g
'
 
=
>
 
'
1
'
,

 
 
'
s
e
n
d
_
e
m
a
i
l
_
c
o
p
i
e
s
_
t
o
_
s
i
t
e
_
a
d
m
i
n
s
'
 
=
>
 
'
0
'
,

 
 
'
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
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
_
d
b
_
v
e
r
s
i
o
n
'
 
=
>
 
'
0
'

)
;

