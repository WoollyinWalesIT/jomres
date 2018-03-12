
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


c
l
a
s
s
 
j
0
6
0
0
0
s
e
a
r
c
h

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
s
e
a
r
c
h
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
c
o
u
n
t
r
y
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
G
B
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
r
e
g
i
o
n
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
1
1
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
t
o
w
n
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
T
o
r
q
u
a
y
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
3
2
'
,
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
2
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
p
t
y
p
e
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
0
0
-
2
0
0
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
s
t
a
r
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
4
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
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
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
d
a
t
e
(
'
Y
/
m
/
d
'
)
.
'
+
1
 
d
a
y
'
)
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

	
	
	
	
	
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
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
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
d
a
t
e
(
'
Y
/
m
/
d
'
)
.
'
+
2
 
d
a
y
s
'
)
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

	
	
	
	
	
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
c
a
t
_
i
d
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
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
a
r
g
_
e
x
a
m
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
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
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
o
p
t
i
o
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
d
a
t
a
_
o
n
l
y
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
d
a
t
a
o
n
l
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
_
o
n
l
y
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
s
c
h
)
;

 
 
 
 
 
 
 
 
$
d
o
S
e
a
r
c
h
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
R
e
s
t
a
r
t
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
d
o
S
e
a
r
c
h
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
S
e
a
r
c
h
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
d
o
S
e
a
r
c
h
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
,
 
'
'
)
;

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
S
e
a
r
c
h
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
i
n
i
t
B
o
o
k
i
n
g
S
e
s
s
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
'
 
&
&
 
!
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
n
e
x
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
 
g
e
t
E
s
c
a
p
e
d
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
)
;


 
 
 
 
 
 
 
 
$
i
n
f
o
I
c
o
n
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
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
.
p
n
g
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
A
l
l
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
A
L
L
'
,
 
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
A
R
C
H
_
A
L
L
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
S
e
a
r
c
h
'
)
;


 
 
 
 
 
 
 
 
$
s
c
h
 
=
 
n
e
w
 
j
o
m
S
e
a
r
c
h
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
,
 
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
)
;

 
 
 
 
 
 
 
 
$
s
c
h
-
>
s
e
a
r
c
h
A
l
l
 
=
 
$
s
e
a
r
c
h
A
l
l
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
 
=
 
$
s
c
h
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
;

 
 
 
 
 
 
 
 
$
h
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
a
l
l
e
d
B
y
M
o
d
u
l
e
"
 
v
a
l
u
e
=
"
'
.
$
s
c
h
-
>
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
"
/
>
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
I
t
e
m
i
d
"
 
v
a
l
u
e
=
"
'
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
I
t
e
m
i
d
'
)
.
'
"
/
>
'
;


 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
h
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
a
l
l
e
d
B
y
M
o
d
u
l
e
"
 
v
a
l
u
e
=
"
'
.
$
s
c
h
-
>
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
"
/
>
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
p
a
g
e
_
i
d
"
 
v
a
l
u
e
=
"
'
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
j
o
m
r
e
s
I
t
e
m
i
d
'
)
.
'
"
/
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
I
D
D
E
N
'
 
]
 
=
 
$
h
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
S
e
a
r
c
h
F
o
r
m
n
a
m
e
 
=
 
$
s
c
h
-
>
f
o
r
m
n
a
m
e
;

 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
O
u
t
p
u
t
 
=
 
$
s
c
h
-
>
s
e
a
r
c
h
O
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
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
 
=
 
$
s
c
h
-
>
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
;


 
 
 
 
 
 
 
 
$
m
e
t
a
T
i
t
l
e
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
u
n
w
a
n
t
e
d
 
=
 
a
r
r
a
y
(
'
%
'
,
 
"
'
"
,
 
'
"
'
)
;

	
	

	
	
$
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
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
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
n
a
m
e
'
,
 
'
'
)
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
$
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
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
t
a
T
i
t
l
e
 
.
=
 
'
 
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
_
d
e
c
o
d
e
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
,
 
E
N
T
_
Q
U
O
T
E
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
$
c
o
u
n
t
r
y
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
c
o
u
n
t
r
y
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
r
y
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
r
y
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
$
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
t
a
T
i
t
l
e
 
.
=
 
'
 
'
.
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
$
r
e
g
i
o
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
e
g
i
o
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
g
i
o
n
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
g
i
o
n
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
$
r
e
g
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
f
i
n
d
_
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
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
t
a
T
i
t
l
e
 
.
=
 
'
 
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
_
d
e
c
o
d
e
(
$
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
,
 
E
N
T
_
Q
U
O
T
E
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
o
w
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
t
o
w
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
w
n
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
w
n
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
 
=
 
$
t
o
w
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
t
a
T
i
t
l
e
 
.
=
 
'
 
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
_
d
e
c
o
d
e
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
,
 
E
N
T
_
Q
U
O
T
E
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
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
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
p
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
p
t
y
p
e
'
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
t
y
p
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
c
a
t
_
i
d
'
 
]
)
)
 
{

	
	
	
$
c
a
t
_
i
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
c
a
t
_
i
d
'
,
 
0
)
;

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
t
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
a
t
_
i
d
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
a
t
_
i
d
'
 
]
 
=
 
$
c
a
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
	
$
_
R
E
Q
U
E
S
T
[
'
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
]
=
"
0
-
5
0
"
;

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
n
g
e
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
n
g
e
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
r
a
n
g
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
 
=
 
a
r
r
a
y
(
'
f
r
o
m
'
 
=
>
 
(
i
n
t
)
 
$
r
a
n
g
e
A
r
r
[
 
0
 
]
,
 
'
t
o
'
 
=
>
 
(
i
n
t
)
 
$
r
a
n
g
e
A
r
r
[
 
1
 
]
,
 
'
r
a
w
'
 
=
>
 
$
r
a
n
g
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
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
'
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
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
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
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
'
 
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
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
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
_
R
E
Q
U
E
S
T
[
 
'
s
t
a
r
s
'
 
]
 
=
=
 
$
s
e
a
r
c
h
A
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
 
=
 
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
t
a
r
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
o
p
t
i
o
n
 
=
=
 
'
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
'
 
&
&
 
(
$
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
 
!
=
 
'
'
 
|
|
 
$
c
o
u
n
t
r
y
 
!
=
 
'
'
 
|
|
 
$
r
e
g
i
o
n
 
!
=
 
'
'
 
|
|
 
$
t
o
w
n
 
!
=
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
e
t
m
e
t
a
d
a
t
a
(
'
t
i
t
l
e
'
,
 
$
m
e
t
a
T
i
t
l
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
s
c
h
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
;
e
x
i
t
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
R
E
Q
U
E
S
T
[
 
'
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
'
 
]
)
 
&
&
 
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
c
h
-
>
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
a
r
r
i
v
a
l
'
 
]
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
a
r
r
i
v
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
d
e
p
a
r
t
u
r
e
'
 
]
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
d
e
p
a
r
t
u
r
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
a
r
r
i
v
a
l
'
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
a
r
r
i
v
a
l
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
d
e
p
a
r
t
u
r
e
'
 
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
u
n
w
a
n
t
e
d
,
 
'
'
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
d
e
p
a
r
t
u
r
e
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
c
o
u
n
t
r
y
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
r
e
g
i
o
n
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
t
o
w
n
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
I
N
F
O
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
I
N
F
O
'
,
 
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
A
R
C
H
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
I
N
F
O
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
L
A
B
E
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
L
A
B
E
L
'
,
 
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
A
R
C
H
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
L
A
B
E
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
,
 
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
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
R
T
Y
P
E
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
R
T
Y
P
E
S
'
,
 
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
A
R
C
H
_
R
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
!
=
 
'
b
o
o
k
a
r
o
o
m
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
A
V
L
_
I
N
F
O
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
A
V
L
_
I
N
F
O
'
,
 
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
A
R
C
H
_
A
V
L
_
I
N
F
O
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
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
'
,
 
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
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
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
p
t
y
p
e
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
_
P
T
Y
P
E
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
P
T
Y
P
E
S
'
,
 
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
A
R
C
H
_
P
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
'
c
a
t
_
i
d
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
H
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
_
J
O
M
R
E
S
_
H
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
A
R
C
H
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
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
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
!
=
 
'
b
o
o
k
a
r
o
o
m
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
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
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
A
R
C
H
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
s
t
a
r
s
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
!
=
 
'
b
o
o
k
a
r
o
o
m
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
T
A
R
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
S
T
A
R
S
'
,
 
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
A
R
C
H
_
S
T
A
R
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
U
B
M
I
T
U
R
L
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
F
O
R
M
N
A
M
E
'
 
]
 
=
 
$
j
o
m
r
e
s
S
e
a
r
c
h
F
o
r
m
n
a
m
e
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
a
t
a
_
o
n
l
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
S
E
L
E
C
T
C
O
M
B
O
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
d
e
f
i
n
e
(
"
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
L
E
C
T
C
O
M
B
O
"
,
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
"
j
a
v
a
s
c
r
i
p
t
"
,
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
c
h
a
i
n
e
d
S
e
l
e
c
t
s
.
j
s
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'

	
	
	
	
	
	
	
<
s
c
r
i
p
t
 
l
a
n
g
u
a
g
e
=
"
J
a
v
a
S
c
r
i
p
t
"
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)

	
	
	
	
	
	
	
{

	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
c
o
u
n
t
r
y
\
'
)
.
c
h
a
i
n
S
e
l
e
c
t
(
\
'
#
r
r
e
g
i
o
n
\
'
,
\
'
'
 
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
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
&
f
i
l
t
e
r
=
c
o
u
n
t
r
y
\
'
,

	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
b
e
f
o
r
e
:
f
u
n
c
t
i
o
n
 
(
t
a
r
g
e
t
)
 
/
/
b
e
f
o
r
e
 
r
e
q
u
e
s
t
 
h
i
d
e
 
t
h
e
 
t
a
r
g
e
t
 
c
o
m
b
o
b
o
x
 
a
n
d
 
d
i
s
p
l
a
y
 
t
h
e
 
l
o
a
d
i
n
g
 
m
e
s
s
a
g
e

	
	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
l
o
a
d
i
n
g
"
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
b
l
o
c
k
"
)
;

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
t
a
r
g
e
t
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
n
o
n
e
"
)
;

	
	
	
	
	
	
	
	
	
}
,

	
	
	
	
	
	
	
	
	
a
f
t
e
r
:
f
u
n
c
t
i
o
n
 
(
t
a
r
g
e
t
)
 
/
/
a
f
t
e
r
 
r
e
q
u
e
s
t
 
s
h
o
w
 
t
h
e
 
t
a
r
g
e
t
 
c
o
m
b
o
b
o
x
 
a
n
d
 
h
i
d
e
 
t
h
e
 
l
o
a
d
i
n
g
 
m
e
s
s
a
g
e

	
	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
l
o
a
d
i
n
g
"
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
n
o
n
e
"
)
;

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
t
a
r
g
e
t
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
i
n
l
i
n
e
"
)
;

	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
}
)
;

	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
r
r
e
g
i
o
n
\
'
)
.
c
h
a
i
n
S
e
l
e
c
t
(
\
'
#
t
t
o
w
n
\
'
,
\
'
'
 
.
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
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
&
f
i
l
t
e
r
=
r
e
g
i
o
n
\
'
,

	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
b
e
f
o
r
e
:
f
u
n
c
t
i
o
n
 
(
t
a
r
g
e
t
)
 

	
	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
l
o
a
d
i
n
g
"
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
b
l
o
c
k
"
)
;

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
t
a
r
g
e
t
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
n
o
n
e
"
)
;

	
	
	
	
	
	
	
	
	
}
,

	
	
	
	
	
	
	
	
	
a
f
t
e
r
:
f
u
n
c
t
i
o
n
 
(
t
a
r
g
e
t
)
 

	
	
	
	
	
	
	
	
	
{
 

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
l
o
a
d
i
n
g
"
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
n
o
n
e
"
)
;

	
	
	
	
	
	
	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
t
a
r
g
e
t
)
.
c
s
s
(
"
d
i
s
p
l
a
y
"
,
"
i
n
l
i
n
e
"
)
;

	
	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
}
)
;

	
	
	
	
	
	
	
}
)
;

	
	
	
	
	
	
	
<
/
s
c
r
i
p
t
>

	
	
	
	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
o
u
n
t
r
y
'
 
]
 
a
s
 
$
c
o
u
n
t
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
]
)
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
E
L
E
C
T
C
O
M
B
O
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
o
u
n
t
r
y
A
r
r
a
y
,
 
'
c
o
u
n
t
r
y
'
,
 
'
s
i
z
e
=
"
1
"
 
i
d
=
"
s
e
a
r
c
h
_
c
o
u
n
t
r
y
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
'
'
)
.
'
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
E
L
E
C
T
C
O
M
B
O
_
H
I
D
D
E
N
D
R
O
P
D
O
W
N
S
_
R
E
G
I
O
N
'
 
]
 
=
 
'
<
!
-
-
 
s
t
a
t
e
 
c
o
m
b
o
b
o
x
 
i
s
 
c
h
a
i
n
e
d
 
b
y
 
c
o
u
n
t
r
y
 
c
o
m
b
o
b
o
x
-
-
>
<
s
e
l
e
c
t
 
n
a
m
e
=
"
r
e
g
i
o
n
"
 
i
d
=
"
r
r
e
g
i
o
n
"
 
s
t
y
l
e
=
"
d
i
s
p
l
a
y
:
n
o
n
e
"
>
<
/
s
e
l
e
c
t
>
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
E
L
E
C
T
C
O
M
B
O
_
H
I
D
D
E
N
D
R
O
P
D
O
W
N
S
_
T
O
W
N
'
 
]
 
=
 
'
<
!
-
-
 
c
i
t
y
 
c
o
m
b
o
b
o
x
 
i
s
 
c
h
a
i
n
e
d
 
b
y
 
s
t
a
t
e
 
c
o
m
b
o
b
o
x
-
-
>
<
s
e
l
e
c
t
 
n
a
m
e
=
"
t
o
w
n
"
 
i
d
=
"
t
t
o
w
n
"
 
s
t
y
l
e
=
"
d
i
s
p
l
a
y
:
n
o
n
e
"
>
<
/
s
e
l
e
c
t
>
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
[
 
0
 
]
[
 
'
p
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
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
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
 
a
s
 
$
p
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
r
o
p
e
r
t
y
[
 
'
p
n
'
 
]
)
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
r
o
p
e
r
t
y
[
 
'
p
n
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
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
n
a
m
e
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
 
a
s
 
$
p
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
y
o
u
 
n
e
e
d
 
t
o
 
u
s
e
 
s
p
e
c
i
a
l
 
c
h
a
r
s
 
h
e
r
e
 
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
 
u
r
l
 
w
i
l
l
 
n
o
t
 
w
o
r
k
 
f
o
r
 
n
o
n
 
l
a
t
i
n
 
s
e
a
r
c
h
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
g
e
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
d
e
t
a
i
l
s
_
u
r
l
(
$
p
r
o
p
e
r
t
y
[
 
'
p
u
i
d
'
 
]
,
 
'
s
e
f
s
a
f
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
r
o
p
e
r
t
y
[
 
'
p
n
'
 
]
)
.
'
<
/
a
>
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
c
o
u
n
t
r
y
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
!
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
o
u
n
t
r
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
c
o
u
n
t
r
y
'
 
]
[
 
0
 
]
[
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
o
u
n
t
r
y
'
 
]
 
a
s
 
$
c
o
u
n
t
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
o
u
n
t
r
y
A
r
r
a
y
,
 
'
c
o
u
n
t
r
y
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
o
u
n
t
r
y
'
 
]
 
a
s
 
$
c
o
u
n
t
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
'
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
&
c
o
u
n
t
r
y
=
'
.
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
c
o
d
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
c
o
u
n
t
r
y
[
 
'
c
o
u
n
t
r
y
n
a
m
e
'
 
]
)
.
'
<
/
a
>
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
c
o
u
n
t
r
y
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
r
e
g
i
o
n
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
!
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
e
g
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
r
e
g
i
o
n
'
 
]
[
 
0
 
]
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
r
e
g
i
o
n
'
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
e
g
i
o
n
'
 
]
 
a
s
 
$
r
e
g
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
$
r
e
g
i
o
n
[
 
'
r
e
g
i
o
n
'
 
]
)
;
 
/
/
 
T
h
i
s
 
i
s
 
i
m
p
o
r
t
a
n
t
.
 
p
h
p
 
w
i
l
l
 
n
o
t
 
p
a
s
s
 
b
a
c
k
,
 
e
g
 
S
a
n
t
&
#
3
9
;
A
n
t
i
m
o
,
 
i
t
 
w
i
l
l
 
o
n
l
y
 
p
a
s
s
 
b
a
c
k
 
S
a
n
t
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
n
e
e
d
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
 
&
#
3
9
;
 
t
o
 
a
 
'
 
t
o
 
b
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
 
u
r
l
.
 
W
h
e
n
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
 
r
u
n
s
 
i
t
'
l
l
 
c
o
n
v
e
r
t
 
t
h
e
 
'
 
b
a
c
k
 
t
o
 
&
#
3
9
;
 
a
n
d
 
t
h
e
 
s
e
a
r
c
h
 
w
i
l
l
 
r
u
n
 
s
u
c
c
e
s
s
f
u
l
l
y
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
_
i
d
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
i
d
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
f
i
n
d
_
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
(
$
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
r
e
g
i
o
n
_
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
e
g
i
o
n
A
r
r
a
y
,
 
'
r
e
g
i
o
n
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
e
g
i
o
n
'
 
]
 
a
s
 
$
r
e
g
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
$
r
e
g
i
o
n
[
 
'
r
e
g
i
o
n
'
 
]
)
;
 
/
/
 
T
h
i
s
 
i
s
 
i
m
p
o
r
t
a
n
t
.
 
p
h
p
 
w
i
l
l
 
n
o
t
 
p
a
s
s
 
b
a
c
k
,
 
e
g
 
S
a
n
t
&
#
3
9
;
A
n
t
i
m
o
,
 
i
t
 
w
i
l
l
 
o
n
l
y
 
p
a
s
s
 
b
a
c
k
 
S
a
n
t
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
n
e
e
d
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
 
&
#
3
9
;
 
t
o
 
a
 
'
 
t
o
 
b
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
 
u
r
l
.
 
W
h
e
n
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
 
r
u
n
s
 
i
t
'
l
l
 
c
o
n
v
e
r
t
 
t
h
e
 
'
 
b
a
c
k
 
t
o
 
&
#
3
9
;
 
a
n
d
 
t
h
e
 
s
e
a
r
c
h
 
w
i
l
l
 
r
u
n
 
s
u
c
c
e
s
s
f
u
l
l
y
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
o
n
_
i
d
 
=
 
f
i
n
d
_
r
e
g
i
o
n
_
i
d
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
f
i
n
d
_
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
(
$
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
'
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
&
r
e
g
i
o
n
=
'
.
$
r
e
g
i
o
n
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
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
)
.
'
<
/
a
>
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
r
e
g
i
o
n
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
t
o
w
n
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
 
&
&
 
!
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
s
c
h
-
>
p
r
e
p
[
'
t
o
w
n
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
t
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
t
a
[
 
0
 
]
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
t
o
w
n
'
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
a
 
a
s
 
$
t
o
w
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
$
t
o
w
n
[
 
'
t
o
w
n
'
 
]
)
;
 
/
/
 
T
h
i
s
 
i
s
 
i
m
p
o
r
t
a
n
t
.
 
p
h
p
 
w
i
l
l
 
n
o
t
 
p
a
s
s
 
b
a
c
k
,
 
e
g
 
S
a
n
t
&
#
3
9
;
A
n
t
i
m
o
,
 
i
t
 
w
i
l
l
 
o
n
l
y
 
p
a
s
s
 
b
a
c
k
 
S
a
n
t
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
n
e
e
d
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
 
&
#
3
9
;
 
t
o
 
a
 
'
 
t
o
 
b
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
 
u
r
l
.
 
W
h
e
n
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
 
r
u
n
s
 
i
t
'
l
l
 
c
o
n
v
e
r
t
 
t
h
e
 
'
 
b
a
c
k
 
t
o
 
&
#
3
9
;
 
a
n
d
 
t
h
e
 
s
e
a
r
c
h
 
w
i
l
l
 
r
u
n
 
s
u
c
c
e
s
s
f
u
l
l
y
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
w
n
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
t
o
w
n
[
 
'
t
o
w
n
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
t
o
w
n
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
t
o
w
n
A
r
r
a
y
,
 
'
t
o
w
n
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
a
 
a
s
 
$
t
o
w
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
'
"
,
 
$
t
o
w
n
[
 
'
t
o
w
n
'
 
]
)
;
 
/
/
 
T
h
i
s
 
i
s
 
i
m
p
o
r
t
a
n
t
.
 
p
h
p
 
w
i
l
l
 
n
o
t
 
p
a
s
s
 
b
a
c
k
,
 
e
g
 
S
a
n
t
&
#
3
9
;
A
n
t
i
m
o
,
 
i
t
 
w
i
l
l
 
o
n
l
y
 
p
a
s
s
 
b
a
c
k
 
S
a
n
t
,
 
t
h
e
r
e
f
o
r
e
 
w
e
 
n
e
e
d
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
 
&
#
3
9
;
 
t
o
 
a
 
'
 
t
o
 
b
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
 
u
r
l
.
 
W
h
e
n
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
 
r
u
n
s
 
i
t
'
l
l
 
c
o
n
v
e
r
t
 
t
h
e
 
'
 
b
a
c
k
 
t
o
 
&
#
3
9
;
 
a
n
d
 
t
h
e
 
s
e
a
r
c
h
 
w
i
l
l
 
r
u
n
 
s
u
c
c
e
s
s
f
u
l
l
y
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
'
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
&
t
o
w
n
=
'
.
$
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
t
o
w
n
[
 
'
t
o
w
n
'
 
]
)
.
'
<
/
a
>
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
t
o
w
n
'
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
t
o
w
n
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
L
A
B
E
L
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
'
<
i
n
p
u
t
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
t
y
p
e
=
"
t
e
x
t
"
 
n
a
m
e
=
"
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
"
 
v
a
l
u
e
=
"
'
.
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
.
'
"
 
 
o
n
f
o
c
u
s
=
"
i
f
 
(
t
h
i
s
.
v
a
l
u
e
 
=
=
\
'
'
.
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
S
E
A
R
C
H
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
L
A
B
E
L
'
 
]
.
'
\
'
)
 
{
t
h
i
s
.
v
a
l
u
e
 
=
 
\
'
\
'
}
"
 
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
f
e
a
t
u
r
e
_
u
i
d
s
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
s
'
 
]
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
s
'
 
]
 
a
s
 
$
f
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
a
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
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
B
B
V
'
.
(
i
n
t
)
 
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
f
e
a
t
u
r
e
[
 
'
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
f
e
a
t
u
r
e
_
a
b
b
v
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
f
e
a
t
u
r
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
f
e
a
t
u
r
e
A
r
r
a
y
,
 
'
f
e
a
t
u
r
e
_
u
i
d
s
[
]
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
S
h
o
w
 
t
h
e
 
f
e
a
t
u
r
e
s
 
a
s
 
j
a
v
a
s
c
r
i
p
t
 
p
o
p
u
p

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
s
h
i
f
t
(
$
s
c
h
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
s
'
 
]
)
;
 
/
/
 
G
e
t
s
 
r
i
d
 
o
f
 
t
h
e
 
"
s
e
a
r
c
h
A
l
l
"
 
o
p
t
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
f
e
a
t
u
r
e
s
'
 
]
 
a
s
 
$
f
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
i
d
 
=
 
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
c
h
e
c
k
e
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
p
i
d
,
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
c
h
e
c
k
e
d
 
=
 
'
c
h
e
c
k
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
a
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
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
B
B
V
'
.
(
i
n
t
)
 
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
f
e
a
t
u
r
e
[
 
'
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
d
e
s
c
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
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
D
E
S
C
'
.
(
i
n
t
)
 
$
f
e
a
t
u
r
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
f
e
a
t
u
r
e
[
 
'
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
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
 
=
 
j
o
m
r
e
s
_
m
a
k
e
T
o
o
l
t
i
p
(
$
f
e
a
t
u
r
e
_
a
b
b
v
,
 
$
f
e
a
t
u
r
e
_
a
b
b
v
,
 
$
f
e
a
t
u
r
e
_
d
e
s
c
,
 
$
f
e
a
t
u
r
e
[
 
'
i
m
a
g
e
'
 
]
 
,
 
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
f
e
a
t
u
r
e
'
,
 
a
r
r
a
y
(
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
d
i
v
 
s
t
y
l
e
=
"
f
l
o
a
t
 
:
 
l
e
f
t
;
"
 
>
'
.
$
t
m
p
.
'
<
i
n
p
u
t
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
n
a
m
e
=
"
f
e
a
t
u
r
e
_
u
i
d
s
[
]
"
 
v
a
l
u
e
=
"
'
.
$
p
i
d
.
'
"
 
'
.
$
i
s
c
h
e
c
k
e
d
.
'
 
/
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
f
e
a
t
u
r
e
'
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
f
e
a
t
u
r
e
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
y
p
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
t
y
p
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
r
t
y
p
e
s
'
 
]
[
 
0
 
]
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
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
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
t
y
p
e
s
'
 
]
 
a
s
 
$
r
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
C
l
a
s
s
A
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
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
_
A
B
B
V
'
.
(
i
n
t
)
 
$
r
t
y
p
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
y
p
e
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
r
t
y
p
e
[
 
'
i
d
'
 
]
,
 
$
r
o
o
m
C
l
a
s
s
A
b
b
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
t
y
p
e
A
r
r
a
y
,
 
'
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
,
 
'
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
r
t
y
p
e
s
'
 
]
 
a
s
 
$
r
o
o
m
_
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
C
l
a
s
s
A
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
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
_
A
B
B
V
'
.
(
i
n
t
)
 
$
r
o
o
m
_
t
y
p
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
o
o
m
_
t
y
p
e
[
 
'
t
i
t
l
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
'
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
&
r
o
o
m
_
t
y
p
e
=
'
.
$
r
o
o
m
_
t
y
p
e
[
 
'
i
d
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
$
r
o
o
m
C
l
a
s
s
A
b
b
v
.
'
<
/
a
>
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
p
t
y
p
e
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
p
t
y
p
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
p
t
y
p
e
s
'
 
]
[
 
0
 
]
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
a
r
c
h
O
u
t
p
u
t
[
 
'
p
t
y
p
e
'
 
]
 
=
=
 
'
d
r
o
p
d
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
p
t
y
p
e
s
'
 
]
 
a
s
 
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
A
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
$
p
t
y
p
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
t
y
p
e
[
 
'
p
t
y
p
e
'
 
]
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
p
t
y
p
e
[
 
'
i
d
'
 
]
,
 
$
p
t
y
p
e
A
b
b
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
p
t
y
p
e
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
p
t
y
p
e
A
r
r
a
y
,
 
'
p
t
y
p
e
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
p
t
y
p
e
s
'
 
]
 
a
s
 
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
A
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
$
p
t
y
p
e
[
 
'
i
d
'
 
]
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
t
y
p
e
[
 
'
p
t
y
p
e
'
 
]
)
,
 
t
r
u
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
p
t
y
p
e
A
b
b
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
'
.
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
.
'
&
p
t
y
p
e
=
'
.
$
p
t
y
p
e
[
 
'
i
d
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
U
R
L
(
$
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
U
r
l
(
$
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
'
.
$
p
t
y
p
e
A
b
b
v
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
c
h
-
>
c
o
l
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
.
=
 
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
p
t
y
p
e
'
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
p
t
y
p
e
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
c
a
t
_
i
d
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
t
e
g
o
r
i
e
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
c
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
 
]
[
 
0
 
]
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
c
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
 
]
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
t
e
g
o
r
i
e
s
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
c
[
 
'
i
d
'
 
]
,
 
$
c
[
 
'
t
i
t
l
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
c
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
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
a
t
e
g
o
r
i
e
s
A
r
r
a
y
,
 
'
c
a
t
_
i
d
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
c
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
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
n
g
e
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
[
 
'
r
a
w
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
 
a
s
 
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
n
g
e
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
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
,
 
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
a
n
g
e
A
r
r
a
y
,
 
'
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
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
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
'
,
 
$
s
c
h
-
>
p
r
e
p
[
 
'
a
r
r
i
v
a
l
'
 
]
,
 
'
a
d
'
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
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
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
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
'
,
 
$
s
c
h
-
>
p
r
e
p
[
 
'
d
e
p
a
r
t
u
r
e
'
 
]
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
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
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
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
'
 
]
[
 
0
 
]
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
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
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
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
'
 
]
 
a
s
 
$
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
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
[
 
'
i
d
'
 
]
,
 
$
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
[
 
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
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
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
A
r
r
a
y
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
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
s
t
a
r
s
'
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
$
s
h
o
w
S
e
a
r
c
h
O
p
t
i
o
n
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
p
r
e
p
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
p
r
e
p
[
 
'
s
t
a
r
s
'
 
]
[
 
0
 
]
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
O
p
t
i
o
n
 
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
s
t
a
r
s
'
 
]
 
a
s
 
$
s
t
a
r
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
s
A
r
r
a
y
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
s
t
a
r
s
[
 
'
i
d
'
 
]
,
 
$
s
t
a
r
s
[
 
'
s
t
a
r
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
s
t
a
r
s
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
s
t
a
r
s
A
r
r
a
y
,
 
'
s
t
a
r
s
'
,
 
'
s
i
z
e
=
"
1
"
 
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
O
p
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
B
u
t
t
o
n
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
s
t
a
r
s
'
 
]
 
=
 
'
E
M
P
T
Y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-

 
 
 
 
 
 
 
 
/
/
i
f
 
(
$
o
p
t
i
o
n
=
=
"
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
"
 
&
&
 
!
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
)

 
 
 
 
 
 
 
 
/
/
	
v
a
r
_
d
u
m
p
(
$
s
c
h
)
;

 
 
 
 
 
 
 
 
/
/
 
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-


 
 
 
 
 
 
 
 
i
f
 
(
$
d
o
S
e
a
r
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
b
e
r
O
f
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
I
n
S
y
s
t
e
m
 
>
 
1
 
&
&
 
!
$
i
n
c
l
u
d
e
d
I
n
M
o
d
u
l
e
 
&
&
 
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
'
 
&
&
 
!
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
n
e
x
t
'
 
]
)
 
&
&
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
S
e
a
r
c
h
_
r
a
n
d
o
m
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
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
,
 
$
s
e
a
r
c
h
O
p
t
i
o
n
s
)
 
&
&
 
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
c
h
-
>
p
r
e
p
[
 
'
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
 
]
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
[
 
'
p
n
'
 
]
 
=
=
 
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
s
[
]
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
g
e
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
d
e
t
a
i
l
s
_
u
r
l
(
$
p
[
 
'
p
u
i
d
'
 
]
,
 
'
s
e
f
s
a
f
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
l
i
n
k
s
)
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
$
l
i
n
k
s
[
0
]
)
,
 
$
s
a
v
e
M
e
s
s
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
o
u
n
t
r
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
S
e
a
r
c
h
_
c
o
u
n
t
r
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
r
e
g
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
S
e
a
r
c
h
_
r
e
g
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
t
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
S
e
a
r
c
h
_
t
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
p
t
y
p
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
c
a
t
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
i
e
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
s
t
a
r
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
f
e
a
t
u
r
e
_
u
i
d
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
t
y
p
e
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
c
h
-
>
f
i
l
t
e
r
[
 
'
a
r
r
i
v
a
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
B
u
t
t
o
n
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
E
A
R
C
H
B
L
U
R
B
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
E
A
R
C
H
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
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
A
R
C
H
_
B
U
T
T
O
N
'
,
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
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
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
H
E
B
U
T
T
O
N
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
s
u
b
m
i
t
"
 
n
a
m
e
=
"
s
e
n
d
"
 
v
a
l
u
e
=
"
'
.
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
f
a
l
s
e
)
.
'
"
 
c
l
a
s
s
=
"
b
u
t
t
o
n
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
H
E
B
U
T
T
O
N
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
s
u
b
m
i
t
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
 
n
a
m
e
=
"
s
e
n
d
"
 
v
a
l
u
e
=
"
'
.
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
f
a
l
s
e
)
.
'
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
a
t
a
_
o
n
l
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
d
o
S
e
a
r
c
h
 
|
|
 
(
$
c
a
l
l
e
d
B
y
M
o
d
u
l
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
 
&
&
 
$
j
r
C
o
n
f
i
g
[
 
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
 
]
 
=
=
 
'
1
'
 
&
&
 
!
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
 
&
&
 
!
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
p
l
-
>
s
e
t
R
o
o
t
(
$
s
c
h
-
>
t
e
m
p
l
a
t
e
F
i
l
e
P
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
$
s
c
h
-
>
t
e
m
p
l
a
t
e
F
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
s
e
a
r
c
h
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
d
o
S
e
a
r
c
h
 
&
&
 
!
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
s
r
c
h
O
n
l
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
c
h
-
>
j
o
m
S
e
a
r
c
h
_
s
h
o
w
r
e
s
u
l
t
s
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
s
c
h
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
B
U
T
T
O
N
'
,
 
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
A
R
C
H
_
B
U
T
T
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
S
E
A
R
C
H
_
H
E
R
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
A
L
L
'
,
 
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
A
R
C
H
_
A
L
L
'
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
C
O
U
N
T
R
Y
S
E
A
R
C
H
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
R
E
G
I
O
N
S
E
A
R
C
H
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
,
 
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
A
R
C
H
_
G
E
O
_
T
O
W
N
S
E
A
R
C
H
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
I
N
F
O
'
,
 
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
A
R
C
H
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
I
N
F
O
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
L
A
B
E
L
'
,
 
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
A
R
C
H
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
L
A
B
E
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
,
 
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
A
R
C
H
_
F
E
A
T
U
R
E
_
I
N
F
O
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
R
T
Y
P
E
S
'
,
 
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
A
R
C
H
_
R
T
Y
P
E
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
A
V
L
_
I
N
F
O
'
,
 
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
A
R
C
H
_
A
V
L
_
I
N
F
O
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
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
'
,
 
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
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
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
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
A
R
C
H
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
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
S
T
A
R
S
'
,
 
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
A
R
C
H
_
S
T
A
R
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
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
A
R
C
H
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
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
A
R
C
H
_
P
T
Y
P
E
S
'
,
 
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
A
R
C
H
_
P
T
Y
P
E
S
'
)
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
,
 
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
,
i
m
a
g
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
0
'
 
O
R
D
E
R
 
B
Y
 
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
 
"
;

 
 
 
 
 
 
 
 
$
r
o
o
m
T
y
p
e
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
T
y
p
e
L
i
s
t
 
a
s
 
$
r
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
C
L
A
S
S
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
.
$
r
t
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
r
t
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
i
d
,
 
p
t
y
p
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
t
y
p
e
s
 
W
H
E
R
E
 
p
u
b
l
i
s
h
e
d
 
=
 
'
1
'
 
O
R
D
E
R
 
B
Y
 
`
o
r
d
e
r
`
 
A
S
C
"
;

 
 
 
 
 
 
 
 
$
p
t
y
p
e
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
t
y
p
e
L
i
s
t
 
a
s
 
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
T
Y
P
E
'
.
$
p
t
y
p
e
-
>
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
p
t
y
p
e
-
>
p
t
y
p
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

