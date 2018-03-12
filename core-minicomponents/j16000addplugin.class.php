
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
a
d
d
p
l
u
g
i
n

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

	
	

 
 
 
 
 
 
 
 
$
t
h
i
s
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
.
'
,
 
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
v
e
r
s
i
o
n
'
]
)
;

 
 
 
 
 
 
 
 

	
	
$
d
e
b
u
g
g
i
n
g
 
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
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
'
)
)
 
{

	
	
	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
'
,
 
1
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
$
t
h
i
r
d
p
a
r
t
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
t
h
i
r
d
p
a
r
t
y
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
c
l
a
s
s
_
e
x
i
s
t
s
(
'
Z
i
p
A
r
c
h
i
v
e
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
E
r
r
o
r
,
 
Z
i
p
A
r
c
h
i
v
e
 
n
o
t
 
a
v
a
i
l
a
b
l
e
 
o
n
 
t
h
i
s
 
s
e
r
v
e
r
.
 
P
l
e
a
s
e
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
t
o
 
r
e
b
u
i
l
d
 
P
H
P
 
w
i
t
h
 
-
-
e
n
a
b
l
e
-
z
i
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
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
p
l
u
g
i
n
N
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
l
u
g
i
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
p
l
u
g
i
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
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
p
l
u
g
i
n
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
a
u
t
o
u
p
g
r
a
d
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
a
u
t
o
u
p
g
r
a
d
e
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
a
u
t
o
u
p
g
r
a
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
u
p
g
r
a
d
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
a
u
t
o
u
p
g
r
a
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
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

 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
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
a
u
t
o
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
_
r
e
s
u
l
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
a
u
t
o
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
_
r
e
s
u
l
t
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
N
E
X
T
_
S
T
E
P
'
 
]
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
e
 
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
<
x
>
'
,
 
'
'
,
 
$
p
l
u
g
i
n
N
a
m
e
)
;

 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
e
 
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
6
0
;
x
&
#
6
2
;
'
,
 
'
'
,
 
$
p
l
u
g
i
n
N
a
m
e
)
;


 
 
 
 
 
 
 
 
$
v
 
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
.
'
,
 
P
H
P
_
V
E
R
S
I
O
N
)
;

 
 
 
 
 
 
 
 
$
v
p
r
t
s
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
m
a
j
o
r
'
 
=
>
 
$
v
[
0
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
m
i
n
o
r
'
 
=
>
 
$
v
[
1
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
l
e
a
s
e
'
 
=
>
 
$
v
[
2
]
,
 
)
;

 
 
 
 
 
 
 
 
$
p
h
p
_
v
e
r
s
i
o
n
 
=
 
$
v
p
r
t
s
[
'
m
a
j
o
r
'
]
.
'
.
'
.
$
v
p
r
t
s
[
'
m
i
n
o
r
'
]
;


 
 
 
 
 
 
 
 
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
c
h
e
c
k
_
l
i
c
e
n
s
e
_
k
e
y
(
t
r
u
e
)
;
 
/
/
o
n
l
y
 
n
e
e
d
e
d
 
i
f
 
w
e
 
w
a
n
t
 
t
o
 
f
o
r
c
e
 
a
 
r
e
c
h
e
c
k

 
 
 
 
 
 
 
 

	
	
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


 
 
 
 
 
 
 
 
i
f
 
(
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
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
=
 
'
1
'
 
&
&
 
!
e
x
t
e
n
s
i
o
n
_
l
o
a
d
e
d
(
'
I
o
n
C
u
b
e
 
L
o
a
d
e
r
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
R
e
d
i
r
e
c
t
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
l
o
a
d
e
r
_
w
i
z
a
r
d
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
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
c
u
r
r
e
n
t
_
l
i
c
e
n
s
e
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
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
)
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
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
[
'
s
t
a
t
u
s
'
]
 
=
=
 
1
)
 
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
l
i
c
e
n
s
e
s
[
 
$
k
e
y
 
]
 
=
 
$
v
a
l
[
'
k
e
y
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
u
s
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
o
_
d
o
w
n
l
o
a
d
 
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
u
s
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
o
_
d
o
w
n
l
o
a
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
_
t
o
_
s
e
n
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
h
a
s
h
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
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
p
l
u
g
i
n
N
a
m
e
,
 
$
c
u
r
r
e
n
t
_
l
i
c
e
n
s
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
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
o
_
d
o
w
n
l
o
a
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
_
t
o
_
s
e
n
d
 
=
 
$
c
u
r
r
e
n
t
_
l
i
c
e
n
s
e
s
[
$
p
l
u
g
i
n
N
a
m
e
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
r
d
p
a
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
E
l
e
m
e
n
t
 
=
 
$
_
F
I
L
E
S
[
 
'
p
l
u
g
i
n
f
i
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
l
o
w
d
e
d
U
p
 
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
.
'
,
 
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
e
 
=
 
$
b
l
o
w
d
e
d
U
p
[
 
0
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
r
d
p
a
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
p
l
u
g
i
n
N
a
m
e
)
 
=
=
 
0
 
&
&
 
!
$
t
h
i
r
d
p
a
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
E
r
r
o
r
,
 
n
o
 
p
l
u
g
i
n
 
n
a
m
e
 
p
a
s
s
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
m
k
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
m
a
k
e
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
 
f
o
l
d
e
r
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
i
t
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
a
p
a
c
h
e
/
y
o
u
r
 
w
e
b
 
s
e
r
v
e
r
 
h
a
s
 
w
r
i
t
e
 
a
c
c
e
s
s
 
t
o
 
t
h
a
t
 
f
o
l
d
e
r
.
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
M
a
d
e
 
'
.
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
N
o
 
n
e
e
d
 
t
o
 
m
a
k
e
 
'
.
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
p
l
u
g
i
n
N
a
m
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
R
e
m
o
v
i
n
g
 
'
.
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
.
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
@
r
m
d
i
r
(
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
R
e
m
o
v
i
n
g
 
'
.
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
.
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
@
r
m
d
i
r
(
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
$
p
l
u
g
i
n
N
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
u
p
d
a
t
e
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
m
k
d
i
r
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
u
p
d
a
t
e
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
m
a
k
e
 
t
h
e
 
f
o
l
d
e
r
 
"
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
u
p
d
a
t
e
s
'
.
'
 
s
o
 
q
u
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
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
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
u
p
d
a
t
e
s
'
.
J
R
D
S
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
C
l
e
a
n
i
n
g
 
u
p
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
 
u
n
p
a
c
k
e
d
 
f
o
r
 
a
 
n
e
w
 
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
 
o
f
 
t
h
e
 
p
l
u
g
i
n
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
m
k
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
M
a
d
e
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
 
f
o
r
 
a
 
n
e
w
 
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
 
o
f
 
t
h
e
 
p
l
u
g
i
n
.
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
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
m
a
k
e
 
t
h
e
 
f
o
l
d
e
r
 
"
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
 
s
o
 
q
u
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
m
k
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
M
a
d
e
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
 
f
o
r
 
a
 
n
e
w
 
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
 
o
f
 
t
h
e
 
p
l
u
g
i
n
.
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
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
m
a
k
e
 
t
h
e
 
f
o
l
d
e
r
 
"
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
 
s
o
 
q
u
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
r
d
p
a
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
_
F
I
L
E
S
[
'
p
l
u
g
i
n
f
i
l
e
'
]
[
'
e
r
r
o
r
'
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
r
m
E
l
e
m
e
n
t
 
=
 
$
_
F
I
L
E
S
[
 
'
p
l
u
g
i
n
f
i
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
l
o
w
d
e
d
U
p
 
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
.
'
,
 
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
e
 
=
 
$
b
l
o
w
d
e
d
U
p
[
 
0
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
,
 
'
-
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
 
=
 
s
t
r
p
o
s
(
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
,
 
'
-
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
f
i
l
e
_
n
a
m
e
 
=
 
s
u
b
s
t
r
(
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
,
 
$
p
o
s
 
+
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
f
i
l
e
n
a
m
e
 
=
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
$
t
e
m
p
_
f
i
l
e
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
 
=
 
s
t
r
p
o
s
(
$
t
e
m
p
_
f
i
l
e
_
n
a
m
e
,
 
'
.
z
i
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
N
a
m
e
 
=
 
s
u
b
s
t
r
(
$
t
e
m
p
_
f
i
l
e
_
n
a
m
e
,
 
0
,
 
$
p
o
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
f
i
l
e
n
a
m
e
 
=
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
n
a
m
e
'
 
]
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
u
p
l
o
a
d
e
d
_
f
i
l
e
(
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
t
m
p
_
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
l
u
g
i
n
_
t
m
p
 
=
 
$
f
o
r
m
E
l
e
m
e
n
t
[
 
'
t
m
p
_
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
o
p
y
(
$
p
l
u
g
i
n
_
t
m
p
,
 
$
n
e
w
f
i
l
e
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
D
e
s
c
 
=
 
'
<
b
>
m
o
v
e
_
u
p
l
o
a
d
e
d
_
f
i
l
e
 
f
a
i
l
e
d
<
/
b
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
r
r
o
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
$
e
r
r
o
r
D
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
c
o
d
e
s
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
0
 
=
>
 
'
T
h
e
r
e
 
i
s
 
n
o
 
e
r
r
o
r
,
 
t
h
e
 
f
i
l
e
 
u
p
l
o
a
d
e
d
 
w
i
t
h
 
s
u
c
c
e
s
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
1
 
=
>
 
'
T
h
e
 
u
p
l
o
a
d
e
d
 
f
i
l
e
 
e
x
c
e
e
d
s
 
t
h
e
 
u
p
l
o
a
d
_
m
a
x
_
f
i
l
e
s
i
z
e
 
d
i
r
e
c
t
i
v
e
 
i
n
 
p
h
p
.
i
n
i
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
2
 
=
>
 
'
T
h
e
 
u
p
l
o
a
d
e
d
 
f
i
l
e
 
e
x
c
e
e
d
s
 
t
h
e
 
M
A
X
_
F
I
L
E
_
S
I
Z
E
 
d
i
r
e
c
t
i
v
e
 
t
h
a
t
 
w
a
s
 
s
p
e
c
i
f
i
e
d
 
i
n
 
t
h
e
 
H
T
M
L
 
f
o
r
m
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
3
 
=
>
 
'
T
h
e
 
u
p
l
o
a
d
e
d
 
f
i
l
e
 
w
a
s
 
o
n
l
y
 
p
a
r
t
i
a
l
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
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
4
 
=
>
 
'
N
o
 
f
i
l
e
 
w
a
s
 
u
p
l
o
a
d
e
d
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
6
 
=
>
 
'
M
i
s
s
i
n
g
 
a
 
t
e
m
p
o
r
a
r
y
 
f
o
l
d
e
r
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
$
e
r
r
o
r
_
c
o
d
e
s
 
[
 
$
_
F
I
L
E
S
[
'
p
l
u
g
i
n
f
i
l
e
'
]
[
'
e
r
r
o
r
'
]
 
]
)
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
$
u
s
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
o
_
d
o
w
n
l
o
a
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
m
k
d
i
r
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
m
a
k
e
 
t
h
e
 
f
o
l
d
e
r
 
"
.
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
.
'
 
s
o
 
q
u
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
A
t
t
e
m
p
t
i
n
g
 
d
o
w
n
l
o
a
d
 
o
f
 
'
.
$
p
l
u
g
i
n
N
a
m
e
.
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
n
e
w
f
i
l
e
n
a
m
e
 
=
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
'
.
v
n
w
'
;

	
	
	
	

	
	
	
	
$
f
i
l
e
_
h
a
n
d
l
e
 
=
 
f
o
p
e
n
(
$
n
e
w
f
i
l
e
n
a
m
e
,
 
'
w
b
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
_
h
a
n
d
l
e
 
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
C
o
u
l
d
n
'
t
 
c
r
e
a
t
e
 
n
e
w
 
f
i
l
e
 
$
n
e
w
f
i
l
e
n
a
m
e
.
 
P
o
s
s
i
b
l
e
 
f
i
l
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
?
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
 
=
 
'
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
l
u
g
i
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
 
=
 
'
&
p
l
u
g
i
n
=
'
.
$
p
l
u
g
i
n
N
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
:
/
/
p
l
u
g
i
n
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
/
'
;

	
	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
i
n
d
e
x
.
p
h
p
?
r
=
g
p
&
c
m
s
=
'
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
'
&
v
n
w
=
1
&
k
e
y
=
'
.
$
k
e
y
_
t
o
_
s
e
n
d
.
$
p
.
'
&
j
o
m
r
e
s
v
e
r
=
'
.
$
m
r
C
o
n
f
i
g
[
 
'
v
e
r
s
i
o
n
'
 
]
.
'
&
h
o
s
t
n
a
m
e
=
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
l
i
v
e
_
s
i
t
e
'
)
.
'
&
p
h
p
_
v
e
r
s
i
o
n
=
'
.
$
p
h
p
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
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
)
;

	
	
	
	

	
	
	
	
$
c
o
n
t
e
n
t
_
t
y
p
e
 
=
 
'
'
;


	
	
	
	
t
r
y
 
{

	
	
	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i

	
	
	
	
	
]
)
;


	
	
	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;

	
	
	
	
	

	
	
	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
[
'
s
i
n
k
'
 
=
>
 
$
f
i
l
e
_
h
a
n
d
l
e
]
)
;

	
	
	
	
	
$
c
o
n
t
e
n
t
_
t
y
p
e
 
=
 
$
r
e
s
p
o
n
s
e
-
>
g
e
t
H
e
a
d
e
r
(
'
C
o
n
t
e
n
t
-
T
y
p
e
'
)
;

	
	
	
	
}

	
	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
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
u
s
e
r
_
f
e
e
d
b
a
c
k
 
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
u
s
e
r
_
f
e
e
d
b
a
c
k
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
"
C
o
u
l
d
 
n
o
t
 
d
o
w
n
l
o
a
d
 
p
l
u
g
i
n
 
$
p
l
u
g
i
n
N
a
m
e
"
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
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
)
)
;

	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
e
n
t
_
t
y
p
e
 
=
=
 
'
t
e
x
t
/
h
t
m
l
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
2
 
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
2
 
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
r
e
t
u
r
n
e
d
_
e
r
r
o
r
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
n
e
w
f
i
l
e
n
a
m
e
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
2
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
E
R
R
O
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
E
R
R
O
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
E
R
R
O
R
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
o
u
t
p
u
t
2
[
'
M
E
S
S
A
G
E
'
]
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
r
e
t
u
r
n
e
d
_
e
r
r
o
r
-
>
m
e
s
s
a
g
e
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
T
R
I
N
G
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
2
[
'
P
L
U
G
I
N
_
M
A
N
A
G
E
R
_
L
I
N
K
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
s
h
o
w
p
l
u
g
i
n
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
2
[
'
P
L
U
G
I
N
_
M
A
N
A
G
E
R
_
T
E
X
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
U
S
T
O
M
C
O
D
E
_
P
L
U
G
I
N
M
A
N
A
G
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
C
U
S
T
O
M
C
O
D
E
_
P
L
U
G
I
N
M
A
N
A
G
E
R
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
2
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
2
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
2
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
p
l
u
g
i
n
_
m
a
n
a
g
e
r
_
e
r
r
o
r
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
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

	
	
	
	
i
f
 
(
i
s
_
r
e
s
o
u
r
c
e
(
$
f
i
l
e
_
h
a
n
d
l
e
)
)
 
{

	
	
	
	
	
f
c
l
o
s
e
(
$
f
i
l
e
_
h
a
n
d
l
e
)
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
O
o
p
s
,
 
t
h
a
t
 
k
e
y
 
i
s
n
'
t
 
v
a
l
i
d
"
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
n
e
w
f
i
l
e
n
a
m
e
)
 
|
|
 
f
i
l
e
s
i
z
e
(
$
n
e
w
f
i
l
e
n
a
m
e
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
m
e
t
h
i
n
g
 
w
e
n
t
 
w
r
o
n
g
 
d
o
w
n
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
 
u
p
d
a
t
e
 
f
i
l
e
s
.
 
Q
u
i
t
t
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
"
D
o
w
n
l
o
a
d
e
d
 
$
n
e
w
f
i
l
e
n
a
m
e
"
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
"
S
t
a
r
t
i
n
g
 
e
x
t
r
a
c
t
i
o
n
 
o
f
 
$
n
e
w
f
i
l
e
n
a
m
e
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
l
e
a
r
s
t
a
t
c
a
c
h
e
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
 
=
 
n
e
w
 
Z
i
p
A
r
c
h
i
v
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
 
=
 
$
z
i
p
-
>
o
p
e
n
(
$
n
e
w
f
i
l
e
n
a
m
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
 
=
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
r
d
p
a
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
-
>
e
x
t
r
a
c
t
T
o
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
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
 
H
i
s
t
o
r
i
c
a
l
l
y
,
 
p
l
u
g
i
n
s
 
h
a
v
e
 
b
e
e
n
 
z
i
p
p
e
d
 
d
i
f
f
e
r
e
n
t
l
y
 
t
h
a
n
 
J
o
m
r
e
s
 
p
l
u
g
i
n
s
,
 
s
o
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
u
n
z
i
p
 
t
h
e
 
f
i
l
e
s
 
i
n
 
3
r
d
 
p
a
r
t
y
 
p
l
u
g
i
n
s
,
 
t
h
e
n
 
m
o
v
e
 
t
h
e
m
 
u
p
 
o
n
e
 
d
i
r
,
 
r
a
t
h
e
r
 
t
h
a
n
 
f
o
r
c
e
 
p
l
u
g
i
n
 
d
e
v
s
 
t
o
 
c
h
a
n
g
e
 
h
o
w
 
t
h
e
i
r
 
f
i
l
e
s
 
a
r
e
 
z
i
p
p
e
d
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
-
>
e
x
t
r
a
c
t
T
o
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
d
e
n
t
i
f
y
 
d
i
r
e
c
t
o
r
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
o
u
r
c
e
 
=
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
s
t
i
n
a
t
i
o
n
 
=
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
i
r
m
v
(
$
s
o
u
r
c
e
,
 
$
d
e
s
t
i
n
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
m
d
i
r
(
$
s
o
u
r
c
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
z
i
p
-
>
c
l
o
s
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
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
U
n
a
b
l
e
 
t
o
 
u
n
z
i
p
 
'
.
$
n
e
w
f
i
l
e
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
i
n
k
(
$
n
e
w
f
i
l
e
n
a
m
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
E
r
r
o
r
 
r
e
m
o
v
i
n
g
 
$
n
e
w
f
i
l
e
n
a
m
e
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
"
C
o
m
p
l
e
t
e
d
 
e
x
t
r
a
c
t
 
o
f
 
$
n
e
w
f
i
l
e
n
a
m
e
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
M
o
v
i
n
g
 
c
o
n
t
e
n
t
s
 
o
f
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
 
t
o
 
'
.
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
d
e
p
e
n
d
e
n
c
i
e
s
_
c
h
e
c
k
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
d
e
p
e
n
d
e
n
c
i
e
s
_
c
h
e
c
k
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
f
o
 
=
 
n
e
w
 
p
l
u
g
i
n
_
c
h
e
c
k
_
d
e
p
e
n
d
e
n
c
i
e
s
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
n
f
o
-
>
t
e
s
t
_
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
n
f
o
-
>
d
e
p
e
n
d
e
n
c
i
e
s
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
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
_
r
e
s
u
l
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
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
_
r
e
s
u
l
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
A
t
t
e
m
p
t
i
n
g
 
t
o
 
a
u
t
o
-
i
n
s
t
a
l
l
 
d
e
p
e
n
d
a
n
c
i
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
6
0
0
0
'
,
 
'
a
d
d
p
l
u
g
i
n
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
l
u
g
i
n
'
 
=
>
 
$
d
,
 
'
a
u
t
o
u
p
g
r
a
d
e
'
 
=
>
 
t
r
u
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
 
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
$
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
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
_
r
e
s
u
l
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
A
u
t
o
 
i
n
s
t
a
l
l
e
d
 
'
.
$
d
.
'
 
a
s
 
i
t
 
i
s
 
r
e
q
u
i
r
e
d
 
b
y
 
'
.
$
p
l
u
g
i
n
N
a
m
e
.
'
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
[
 
'
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
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
_
r
e
s
u
l
t
[
 
'
M
E
S
S
A
G
E
'
 
]
 
=
 
'
F
a
i
l
e
d
 
t
o
 
a
u
t
o
 
i
n
s
t
a
l
l
 
'
.
$
d
.
'
.
 
P
l
e
a
s
e
 
i
n
s
t
a
l
l
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
u
a
l
l
y
 
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
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
o
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
_
r
e
s
u
l
t
s
[
 
]
 
=
 
$
a
u
t
o
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
_
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
 
F
a
i
l
e
d
 
d
e
p
e
n
d
e
n
c
i
e
s
 
c
h
e
c
k
.
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
'
v
e
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
p
l
u
g
i
n
s
 
b
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
i
n
s
t
a
l
l
 
t
h
i
s
 
o
n
e
:
 
"
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
i
n
f
o
-
>
d
e
p
e
n
d
e
n
c
i
e
s
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
 
'
E
R
R
O
R
'
 
]
 
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
a
d
d
p
l
u
g
i
n
&
n
o
_
h
t
m
l
=
1
&
p
l
u
g
i
n
=
'
.
$
d
.
'
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
'
.
$
d
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
c
l
u
s
i
o
n
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
e
x
c
l
u
s
i
o
n
s
_
c
h
e
c
k
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
e
x
c
l
u
s
i
o
n
s
_
c
h
e
c
k
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
f
o
 
=
 
n
e
w
 
p
l
u
g
i
n
_
c
h
e
c
k
_
e
x
c
l
u
s
i
o
n
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
n
f
o
-
>
t
e
s
t
_
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
"
 
F
a
i
l
e
d
 
p
l
u
g
i
n
_
c
h
e
c
k
_
e
x
c
l
u
s
i
o
n
s
 
c
h
e
c
k
.
 
P
l
e
a
s
e
 
e
n
s
u
r
e
 
t
h
a
t
 
y
o
u
'
v
e
 
u
n
-
i
n
s
t
a
l
l
e
d
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
p
l
u
g
i
n
s
 
b
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
i
n
s
t
a
l
l
 
t
h
i
s
 
o
n
e
:
 
"
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
i
n
f
o
-
>
e
x
c
l
u
s
i
o
n
s
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
c
l
u
s
i
o
n
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
E
r
r
o
r
,
 
t
h
e
 
p
l
u
g
i
n
 
y
o
u
 
a
r
e
 
t
r
y
i
n
g
 
t
o
 
i
n
s
t
a
l
l
 
c
a
n
n
o
t
 
b
e
 
i
n
s
t
a
l
l
e
d
 
b
e
c
a
u
s
e
 
'
.
$
d
.
'
 
i
s
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
[
"
E
R
R
O
R
"
]
=
 
"
 
O
n
e
 
o
r
 
m
o
r
e
 
m
a
y
 
b
e
 
i
n
s
t
a
l
l
e
d
,
 
t
h
i
s
 
l
i
s
t
 
i
s
 
a
 
l
i
s
t
 
o
f
 
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
 
t
h
e
 
p
l
u
g
i
n
 
t
h
a
t
 
y
o
u
 
a
r
e
 
t
r
y
i
n
g
 
t
o
 
i
n
s
t
a
l
l
 
w
i
l
l
 
c
o
n
f
l
i
c
t
 
w
i
t
h
.
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
 
P
l
u
g
i
n
 
i
n
f
o
 
f
i
l
e
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
,
 
c
a
n
n
o
t
 
c
o
n
t
i
n
u
e
 
w
i
t
h
 
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
.
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
n
a
m
e
 
=
 
'
p
l
u
g
i
n
_
i
n
f
o
_
'
.
$
p
l
u
g
i
n
N
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
c
l
a
s
s
 
=
 
n
e
w
 
$
c
l
a
s
s
n
a
m
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
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
.
'
,
 
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
m
i
n
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
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
m
i
n
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
)
 
=
=
 
3
 
&
&
 
c
o
u
n
t
(
$
t
h
i
s
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
)
 
=
=
 
3
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
=
 
$
m
i
n
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
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
=
 
$
m
i
n
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
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
_
r
e
v
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
 
$
m
i
n
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
[
 
2
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
=
 
$
t
h
i
s
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
[
 
0
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
=
 
$
t
h
i
s
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
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
r
e
v
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
 
$
t
h
i
s
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
[
 
2
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
>
=
 
$
m
i
n
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
>
=
 
$
m
i
n
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
r
e
v
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
 
>
=
 
$
m
i
n
_
r
e
v
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
>
=
 
$
m
i
n
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
&
&
 
$
c
u
r
r
e
n
t
_
m
i
n
o
r
_
v
e
r
s
i
o
n
 
>
 
$
m
i
n
_
m
i
n
o
r
_
v
e
r
s
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
_
m
a
j
o
r
_
v
e
r
s
i
o
n
 
>
 
$
m
i
n
_
m
a
j
o
r
_
v
e
r
s
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
r
r
o
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
E
r
r
o
r
,
 
t
h
i
s
 
p
l
u
g
i
n
 
r
e
q
u
i
r
e
s
 
a
t
 
l
e
a
s
t
 
v
e
r
s
i
o
n
 
'
.
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
m
i
n
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
'
 
]
.
'
 
o
f
 
J
o
m
r
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
d
_
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
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
i
r
m
v
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
,
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
,
 
t
r
u
e
,
 
$
f
u
n
c
l
o
c
 
=
 
J
R
D
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
[
 
'
s
u
c
c
e
s
s
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
.
"
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
"
;
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
"
M
o
v
e
d
 
c
o
n
t
e
n
t
s
 
o
f
 
$
n
e
w
f
i
l
e
n
a
m
e
 
t
o
 
"
.
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
r
m
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
 
r
e
m
o
v
i
n
g
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
r
m
d
i
r
(
$
u
p
d
a
t
e
D
i
r
P
a
t
h
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
E
r
r
o
r
 
r
e
m
o
v
i
n
g
 
$
u
p
d
a
t
e
D
i
r
P
a
t
h
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
o
u
c
h
(
$
r
e
m
o
t
e
_
p
l
u
g
i
n
s
D
i
r
P
a
t
h
.
$
p
l
u
g
i
n
N
a
m
e
.
J
R
D
S
.
'
i
n
d
e
x
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
i
s
s
e
t
(
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
t
y
p
e
'
 
]
)
 
&
&
 
(
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
m
a
m
b
o
t
'
 
|
|
 
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
m
o
d
u
l
e
'
 
|
|
 
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
w
i
d
g
e
t
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
j
o
o
m
l
a
(
)
 
|
|
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
d
_
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
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
 
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
 
a
r
r
a
y
(
'
s
u
c
c
e
s
s
'
 
=
>
 
t
r
u
e
,
 
'
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
'
 
=
>
 
t
r
u
e
)
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
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
d
_
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
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
a
r
r
a
y
(
'
s
u
c
c
e
s
s
'
 
=
>
 
t
r
u
e
,
 
'
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
'
 
=
>
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
d
_
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
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
a
r
r
a
y
(
'
s
u
c
c
e
s
s
'
 
=
>
 
t
r
u
e
,
 
'
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
'
 
=
>
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
T
h
e
r
e
 
w
a
s
 
a
n
 
e
r
r
o
r
 
w
h
i
l
e
 
u
n
p
a
c
k
i
n
g
 
a
n
d
 
m
o
v
i
n
g
 
t
h
e
 
p
l
u
g
i
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
E
r
r
o
r
 
'
.
$
u
p
d
a
t
e
D
i
r
P
a
t
h
.
'
u
n
p
a
c
k
e
d
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
a
u
t
o
u
p
g
r
a
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
d
_
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
i
s
c
o
v
e
r
y
_
r
e
q
u
i
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
l
u
g
i
n
_
c
l
a
s
s
-
>
d
a
t
a
[
 
'
t
y
p
e
'
 
]
 
=
=
 
'
w
i
d
g
e
t
'
)
 
{
 
/
/
 
I
t
'
s
 
a
 
w
o
r
d
p
r
e
s
s
 
w
i
d
g
e
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
N
E
X
T
_
S
T
E
P
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
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
D
I
R
E
C
T
O
R
Y
.
'
/
p
l
u
g
i
n
s
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
S
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
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
'
.
$
p
l
u
g
i
n
N
a
m
e
.
'
 
p
l
u
g
i
n
.
 
T
h
e
 
n
e
x
t
 
b
u
t
t
o
n
 
w
i
l
l
 
t
a
k
e
 
y
o
u
 
t
o
 
t
h
e
 
W
o
r
d
p
r
e
s
s
 
p
l
u
g
i
n
s
 
p
a
g
e
 
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
 
a
c
t
i
v
a
t
e
 
t
h
e
 
p
l
u
g
i
n
.
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
o
u
t
p
u
t
[
 
'
N
E
X
T
_
S
T
E
P
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
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
D
I
R
E
C
T
O
R
Y
.
'
/
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
i
n
s
t
a
l
l
e
r
&
v
i
e
w
=
d
i
s
c
o
v
e
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
S
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
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
'
.
$
p
l
u
g
i
n
N
a
m
e
.
"
 
p
l
u
g
i
n
.
 
T
h
e
 
n
e
x
t
 
b
u
t
t
o
n
 
w
i
l
l
 
t
a
k
e
 
y
o
u
 
t
o
 
t
h
e
 
E
x
t
e
n
s
i
o
n
 
D
i
s
c
o
v
e
r
y
 
p
a
g
e
 
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
 
f
i
n
i
s
h
 
t
h
e
 
p
l
u
g
i
n
'
s
 
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
.
"
)
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
N
E
X
T
_
S
T
E
P
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
s
h
o
w
p
l
u
g
i
n
s
#
'
.
$
p
l
u
g
i
n
N
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
[
 
]
 
=
 
a
r
r
a
y
(
'
M
E
S
S
A
G
E
'
 
=
>
 
'
S
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
 
i
n
s
t
a
l
l
e
d
 
t
h
e
 
'
.
$
p
l
u
g
i
n
N
a
m
e
.
'
 
p
l
u
g
i
n
.
 
T
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
 
w
i
l
l
 
t
a
k
e
 
y
o
u
 
b
a
c
k
 
t
o
 
t
h
e
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
s
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
_
r
e
g
i
s
t
r
y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
e
m
p
t
y
D
i
r
(
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
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
e
r
r
o
r
_
m
e
s
s
a
g
e
s
[
 
]
 
=
 
$
e
r
r
o
r
_
m
e
s
s
s
a
g
e
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
e
r
r
o
r
_
m
e
s
s
a
g
e
s
'
,
 
$
e
r
r
o
r
_
m
e
s
s
a
g
e
s
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
a
u
t
o
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
_
r
e
s
u
l
t
s
'
,
 
$
a
u
t
o
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
_
r
e
s
u
l
t
s
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
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
'
,
 
$
p
r
o
g
r
e
s
s
_
m
e
s
s
a
g
e
s
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
e
x
c
l
u
s
i
o
n
s
'
,
 
$
e
x
c
l
u
s
i
o
n
s
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
s
u
c
c
e
s
s
'
,
 
$
s
u
c
c
e
s
s
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
p
l
u
g
i
n
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
_
r
e
s
u
l
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
1
'
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

