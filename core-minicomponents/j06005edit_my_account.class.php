
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
5
e
d
i
t
_
m
y
_
a
c
c
o
u
n
t

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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
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
s
.
 
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
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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
 
f
a
l
s
e
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
v
a
t
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
u
s
e
r
_
d
e
t
a
i
l
s
 
=
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
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
-
>
i
d
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
I
R
S
T
N
A
M
E
'
 
]
 
=
 
'
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
U
R
N
A
M
E
'
 
]
 
=
 
'
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
H
O
U
S
E
'
 
]
 
=
 
'
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
T
R
E
E
T
'
 
]
 
=
 
'
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
T
O
W
N
'
 
]
 
=
 
'
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
R
E
G
I
O
N
'
 
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
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
 
]
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
 
c
r
e
a
t
e
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
i
e
s
D
r
o
p
d
o
w
n
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
 
]
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
P
O
S
T
C
O
D
E
'
 
]
 
=
 
'
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
L
A
N
D
L
I
N
E
'
 
]
 
=
 
'
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
M
O
B
I
L
E
'
 
]
 
=
 
'
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
E
M
A
I
L
'
 
]
 
=
 
$
u
s
e
r
_
d
e
t
a
i
l
s
[
 
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
-
>
i
d
 
]
[
 
'
e
m
a
i
l
'
 
]
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
I
M
A
G
E
'
 
]
 
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
n
o
i
m
a
g
e
.
g
i
f
'
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
r
e
t
u
r
n
_
u
r
l
'
]
)
 
&
&
 
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
r
e
t
u
r
n
_
u
r
l
'
]
 
!
=
 
'
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
R
E
T
U
R
N
_
U
R
L
'
 
]
 
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
r
e
t
u
r
n
_
u
r
l
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
o
u
t
p
u
t
[
 
'
R
E
T
U
R
N
_
U
R
L
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
-
>
i
d
 
>
 
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
u
s
e
r
i
m
a
g
e
s
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
u
s
e
r
i
m
a
g
e
s
'
]
[
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
-
>
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
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
I
M
A
G
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
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
u
s
e
r
i
m
a
g
e
s
'
]
[
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
-
>
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
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
L
E
T
E
L
I
N
K
'
 
]
 
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
t
a
s
k
=
s
a
v
e
_
m
y
_
a
c
c
o
u
n
t
&
d
e
l
e
t
e
=
1
&
f
i
l
e
=
'
.
b
a
s
e
n
a
m
e
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
u
s
e
r
i
m
a
g
e
s
'
]
[
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
-
>
i
d
]
[
0
]
[
'
l
a
r
g
e
'
]
)
.
'
"
>
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
B
U
T
T
O
N
_
D
E
L
E
T
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
B
U
T
T
O
N
_
D
E
L
E
T
E
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
<
/
a
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
U
P
L
O
A
D
I
N
P
U
T
'
 
]
 
=
 
'
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
I
M
A
G
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
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
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
L
E
T
E
L
I
N
K
'
 
]
 
=
 
'
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
U
P
L
O
A
D
I
N
P
U
T
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
f
i
l
e
"
 
n
a
m
e
=
"
f
i
l
e
s
"
/
>
'
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
-
>
p
r
o
f
i
l
e
_
i
d
 
>
 
0
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
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
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
-
>
f
i
r
s
t
n
a
m
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
S
U
R
N
A
M
E
'
 
]
 
=
 
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
-
>
s
u
r
n
a
m
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
H
O
U
S
E
'
 
]
 
=
 
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
-
>
h
o
u
s
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
S
T
R
E
E
T
'
 
]
 
=
 
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
-
>
s
t
r
e
e
t
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
T
O
W
N
'
 
]
 
=
 
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
-
>
t
o
w
n
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
R
E
G
I
O
N
'
 
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
(
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
-
>
c
o
u
n
t
r
y
,
 
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
-
>
r
e
g
i
o
n
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
 
c
r
e
a
t
e
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
i
e
s
D
r
o
p
d
o
w
n
(
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
-
>
c
o
u
n
t
r
y
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
P
O
S
T
C
O
D
E
'
 
]
 
=
 
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
-
>
p
o
s
t
c
o
d
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
L
A
N
D
L
I
N
E
'
 
]
 
=
 
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
-
>
t
e
l
_
l
a
n
d
l
i
n
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
M
O
B
I
L
E
'
 
]
 
=
 
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
-
>
t
e
l
_
m
o
b
i
l
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
F
A
X
'
 
]
 
=
 
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
-
>
t
e
l
_
f
a
x
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
E
M
A
I
L
'
 
]
 
=
 
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
-
>
e
m
a
i
l
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
n
e
w
 
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
b
u
y
e
r
_
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
_
b
y
p
r
o
f
i
l
e
_
i
d
'
,
 
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
f
i
l
e
_
i
d
'
 
=
>
 
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
-
>
i
d
)
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
V
A
T
_
N
U
M
B
E
R
'
 
]
 
=
 
$
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
-
>
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
V
A
T
_
N
U
M
B
E
R
_
V
A
L
I
D
A
T
E
D
'
 
]
 
=
 
$
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
-
>
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
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
s
u
c
c
e
s
s
 
=
 
$
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
-
>
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
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
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
s
u
c
c
e
s
s
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
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
[
0
]
[
 
'
V
A
T
_
N
U
M
B
E
R
_
V
A
L
I
D
A
T
I
O
N
_
S
T
A
T
U
S
'
]
 
=
 
$
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
s
u
c
c
e
s
s
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
-
>
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
v
a
t
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
[
0
]
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
L
A
S
S
'
]
 
=
 
'
a
l
e
r
t
-
s
u
c
c
e
s
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
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
[
0
]
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
L
A
S
S
'
]
 
=
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
v
a
t
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
[
0
]
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
L
A
S
S
'
]
 
=
 
'
a
l
e
r
t
-
e
r
r
o
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
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
[
0
]
[
 
'
V
A
L
I
D
A
T
I
O
N
_
C
L
A
S
S
'
]
 
=
 
'
u
i
-
s
t
a
t
e
-
e
r
r
o
r
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
F
I
R
S
T
N
A
M
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
U
R
N
A
M
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
H
O
U
S
E
N
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
S
T
R
E
E
T
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
N
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
T
O
W
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
R
E
G
I
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
P
O
S
T
C
O
D
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

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
R
E
Q
U
I
R
E
D
_
E
M
A
I
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
F
I
R
S
T
N
A
M
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
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
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
D
I
S
P
G
U
E
S
T
_
F
I
R
S
T
N
A
M
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
U
R
N
A
M
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
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
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
D
I
S
P
G
U
E
S
T
_
S
U
R
N
A
M
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
H
O
U
S
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
D
I
S
P
G
U
E
S
T
_
H
O
U
S
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
D
I
S
P
G
U
E
S
T
_
H
O
U
S
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
R
E
E
T
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
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
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
D
I
S
P
G
U
E
S
T
_
S
T
R
E
E
T
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
T
O
W
N
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
D
I
S
P
G
U
E
S
T
_
T
O
W
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
C
O
M
_
M
R
_
D
I
S
P
G
U
E
S
T
_
T
O
W
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
R
E
G
I
O
N
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
R
C
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
_
H
E
A
D
E
R
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
R
C
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
_
H
E
A
D
E
R
_
R
E
G
I
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
R
C
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
_
H
E
A
D
E
R
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
R
C
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
_
H
E
A
D
E
R
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
P
O
S
T
C
O
D
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
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
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
D
I
S
P
G
U
E
S
T
_
P
O
S
T
C
O
D
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
L
A
N
D
L
I
N
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
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
D
I
S
P
G
U
E
S
T
_
L
A
N
D
L
I
N
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
M
O
B
I
L
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
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
D
I
S
P
G
U
E
S
T
_
M
O
B
I
L
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
F
A
X
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
D
I
S
P
G
U
E
S
T
_
F
A
X
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
D
I
S
P
G
U
E
S
T
_
F
A
X
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
E
M
A
I
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
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
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
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
C
O
M
_
Y
O
U
R
B
U
S
I
N
E
S
S
_
V
A
T
N
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
_
J
O
M
R
E
S
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
B
M
I
T
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
B
M
I
T
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
B
M
I
T
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
P
A
G
E
T
I
T
L
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
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
T
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
M
Y
_
A
C
C
O
U
N
T
_
E
D
I
T
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

 
 
 
 
 
 
 
 
 
 
 
 
$
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
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
'
e
d
i
t
_
m
y
_
a
c
c
o
u
n
t
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
'
,
 
$
v
a
t
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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

