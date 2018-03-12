
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
1
6
0
0
0
j
o
m
r
e
s
_
s
y
s
t
e
m
_
i
n
f
o

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
o
u
t
p
u
t
_
n
o
w
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
_
n
o
w
 
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
o
u
t
p
u
t
_
n
o
w
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
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
/
/
j
o
m
r
e
s
 
v
e
r
s
i
o
n

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
f
i
l
e
 
=
 
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
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
.
p
h
p
'
;
 
/
/
 
T
h
i
s
 
i
s
 
t
o
 
p
u
l
l
 
i
n
 
t
h
e
 
J
o
m
r
e
s
 
v
e
r
s
i
o
n
 
f
r
o
m
 
m
r
C
o
n
f
i
g

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
$
c
o
n
f
i
g
f
i
l
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
_
v
e
r
s
i
o
n
 
=
 
g
e
t
_
j
o
m
r
e
s
_
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
(
)
;

 
 
 
 
 
 
 
 
$
l
a
t
e
s
t
_
v
e
r
s
i
o
n
 
=
 
g
e
t
_
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
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
 
'
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
T
H
I
S
J
O
M
R
E
S
V
E
R
S
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
V
E
R
S
I
O
N
C
H
E
C
K
_
T
H
I
S
J
O
M
R
E
S
V
E
R
S
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
V
E
R
S
I
O
N
C
H
E
C
K
_
T
H
I
S
J
O
M
R
E
S
V
E
R
S
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
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
T
H
I
S
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
'
 
]
 
=
 
$
t
h
i
s
_
v
e
r
s
i
o
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
J
O
M
R
E
S
_
V
E
R
S
I
O
N
_
L
A
B
E
L
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
l
a
b
e
l
-
g
r
e
e
n
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
R
R
O
R
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
I
G
H
L
I
G
H
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
A
L
E
R
T
'
 
]
 
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
l
a
t
e
s
t
_
v
e
r
s
i
o
n
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
J
O
M
R
E
S
_
V
E
R
S
I
O
N
_
L
A
B
E
L
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
l
a
b
e
l
-
r
e
d
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
T
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
V
E
R
S
I
O
N
'
 
]
 
=
 
'
U
n
k
n
o
w
n
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
R
R
O
R
'
 
]
 
=
 
'
S
o
r
r
y
,
 
c
o
u
l
d
 
n
o
t
 
g
e
t
 
l
a
t
e
s
t
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
,
 
i
s
 
t
h
e
r
e
 
a
 
f
i
r
e
w
a
l
l
 
p
r
e
v
e
n
t
i
n
g
 
c
o
m
m
u
n
i
c
a
t
i
o
n
 
w
i
t
h
 
h
t
t
p
:
/
/
u
p
d
a
t
e
s
.
j
o
m
r
e
s
4
.
n
e
t
 
?
 
A
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
l
y
,
 
p
l
e
a
s
e
 
c
h
e
c
k
 
t
h
a
t
 
C
U
R
L
 
i
s
 
e
n
a
b
l
e
d
 
o
n
 
t
h
i
s
 
w
e
b
s
e
r
v
e
r
<
p
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
H
I
G
H
L
I
G
H
T
'
 
]
 
=
 
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
 
?
 
'
a
l
e
r
t
 
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
 
:
 
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
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
 
=
 
c
h
e
c
k
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
)
 
{

	
	
	
	

	
	
	
	
$
k
e
y
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
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
'
)
;

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
k
e
y
_
v
a
l
i
d
 
=
 
$
k
e
y
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
-
>
k
e
y
_
v
a
l
i
d
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
I
G
H
L
I
G
H
T
'
 
]
 
=
 
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
 
?
 
'
a
l
e
r
t
 
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
 
:
 
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
A
L
E
R
T
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
_
A
D
M
I
N
.
'
&
t
a
s
k
=
u
p
d
a
t
e
s
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
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


	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
k
e
y
_
v
a
l
i
d
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
U
P
D
A
T
E
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
_
K
E
Y
V
A
L
I
D
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
I
N
F
O
_
K
E
Y
V
A
L
I
D
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
U
P
D
A
T
E
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
U
P
D
A
T
E
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
_
J
O
M
R
E
S
_
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
R
E
N
E
W
A
L
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
R
E
N
E
W
A
L
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
_
R
E
N
E
W
A
L
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
J
O
M
R
E
S
_
V
E
R
S
I
O
N
_
L
A
B
E
L
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
l
a
b
e
l
-
r
e
d
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
L
A
T
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
V
E
R
S
I
O
N
'
 
]
 
=
 
$
l
a
t
e
s
t
_
v
e
r
s
i
o
n
;

 
 
 
 
 
 
 
 
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
j
o
m
r
e
s
_
s
y
s
t
e
m
_
i
n
f
o
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

