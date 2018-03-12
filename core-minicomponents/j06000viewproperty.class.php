
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
v
i
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
_
u
i
d
 
=
 
(
i
n
t
)
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
'
,
 
0
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
s
_
p
r
o
p
e
r
t
y
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
_
u
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
c
u
s
t
o
m
_
t
e
x
t
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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
_
u
i
d
)
;

 
 
 
 
 
 
 
 
i
f
 
(
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
]
 
=
=
 
'
1
'
)
 
{

	
	
	

	
	
	
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
 
]
)
)
 
{

	
	
	
	
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
'
]
 
=
 
(
i
n
t
)
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
 
]
;

	
	
	
}


	
	
	
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
t
_
m
o
n
t
h
'
]
 
=
 
1
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
 
]
)
 
&
&
 
!
(
b
o
o
l
)
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
 
]
 
)
 
{

	
	
	
	
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
t
_
m
o
n
t
h
'
]
 
=
 
d
a
t
e
(
"
m
"
)
;

	
	
	
}

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
0
6
0
0
0
'
,
 
'
s
r
p
_
c
a
l
e
n
d
a
r
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
,
 
'
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
'
 
=
>
 
2
4
)
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
0
6
0
0
0
'
,
 
'
m
r
p
_
c
a
l
e
n
d
a
r
'
 
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
b
a
s
i
c
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
)
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
-
>
g
a
t
h
e
r
_
d
a
t
a
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
_
u
i
d
)
;


 
 
 
 
 
 
 
 
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
u
s
e
r
I
s
M
a
n
a
g
e
r
 
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
$
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
a
u
t
h
o
r
i
s
e
d
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
)
 
&
&
 
$
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
 
!
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
c
u
r
r
e
n
t
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
e
t
_
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
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
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
u
i
d
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
c
l
i
c
k
s
 
c
o
u
n
t
e
r

 
 
 
 
 
 
 
 
i
f
 
(
!
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
p
r
o
p
e
r
t
y
C
l
i
c
k
e
d
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
_
u
i
d
)
;

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
/
/
t
r
i
g
g
e
r
 
p
o
i
n
t
 
b
e
f
o
r
e
 
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
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
1
5
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
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
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
)
)
;

	
	

 
 
 
 
 
 
 
 
/
/
s
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
 
h
e
a
d
e
r

 
 
 
 
 
 
 
 
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
_
u
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

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
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
]
 
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
0
6
0
0
0
'
,
 
'
s
h
o
w
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
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
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
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
a
g
e
n
t

 
 
 
 
 
 
 
 
/
/
 
U
n
c
o
m
m
e
n
t
 
t
o
 
a
d
d
 
t
h
e
 
a
g
e
n
t
 
p
a
n
e
 
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
 
d
e
t
a
i
l
s
 
p
a
g
e
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
A
G
E
N
T
_
D
E
T
A
I
L
S
'
]
 
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
0
6
0
0
0
'
,
 
'
v
i
e
w
_
a
g
e
n
t
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
r
e
v
i
e
w
s
 
s
u
m
m
a
r
y

 
 
 
 
 
 
 
 
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
]
 
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
0
6
0
0
0
'
,
 
'
s
h
o
w
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
r
e
v
i
e
w
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
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
i
n
l
i
n
e
 
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
 
c
a
l
e
n
d
a
r

 
 
 
 
 
 
 
 
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
N
L
I
N
E
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
]
 
=
 
'
'
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
1
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
N
L
I
N
E
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
]
 
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
0
6
0
0
0
'
,
 
'
u
i
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
_
c
a
l
e
n
d
a
r
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
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
t
a
i
l
s
 
b
u
t
t
o
n
s
/
l
i
n
k
s
 
s
t
a
r
t

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
s
l
i
n
k
 
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
l
i
d
e
s
h
o
w
l
i
n
k
 
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
g
a
l
l
e
r
y
l
i
n
k
 
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
m
a
p
p
i
n
g
l
i
n
k
 
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
b
o
o
k
i
n
g
l
i
n
k
 
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
o
o
m
s
l
i
s
t
l
i
n
k
 
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
t
a
r
i
f
f
s
 
l
i
n
k

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
0
 
&
&
 
!
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
l
i
n
k
[
 
'
L
I
N
K
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
.
"
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
t
a
r
i
f
f
s
&
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
$
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
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
[
 
'
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
F
R
O
N
T
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
T
A
R
I
F
F
S
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
t
a
r
i
f
f
s
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
s
l
i
d
e
s
h
o
w
 
l
i
n
k

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
l
i
n
k
[
 
'
L
I
N
K
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
s
l
i
d
e
s
h
o
w
&
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
.
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
[
 
'
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
F
R
O
N
T
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
s
l
i
d
e
s
h
o
w
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
e
x
t
e
r
n
a
l
 
l
i
n
k

 
 
 
 
 
 
 
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
)
 
&
&
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
g
a
l
l
e
r
y
L
i
n
k
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
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
U
R
L
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
G
A
L
L
E
R
Y
L
I
N
K
'
 
]
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
_
c
a
l
l
b
a
c
k
(
"

	
	
	
	
#
(
(
h
t
t
p
|
h
t
t
p
s
|
f
t
p
)
:
/
/
(
\
S
*
?
\
.
\
S
*
?
)
)
(
\
s
|
\
;
|
\
)
|
\
]
|
\
[
|
\
{
|
\
}
|
,
|
\
"
|
'
|
:
|
\
<
|
$
|
\
.
\
s
)
#
i
"
,
 

	
	
	
	
f
u
n
c
t
i
o
n
(
$
m
)
 
{
r
e
t
u
r
n
 
"
'
<
a
 
h
r
e
f
=
\
"
$
m
[
1
]
\
"
 
t
a
r
g
e
t
=
\
"
_
b
l
a
n
k
\
"
 
c
l
a
s
s
=
\
"
f
g
-
b
u
t
t
o
n
 
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
\
"
>
$
m
[
3
]
<
/
a
>
$
m
[
4
]
'
"
;
}
,
 

	
	
	
	
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
l
l
e
r
y
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
/
*
 
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
m
a
p
p
i
n
g
l
i
n
k
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
t
e
r
_
v
a
r
(
$
m
a
p
p
i
n
g
l
i
n
k
,
 
F
I
L
T
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
_
U
R
L
)
 
=
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
L
I
N
K
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
$
m
a
p
p
i
n
g
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
[
 
'
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
M
A
P
P
I
N
G
L
I
N
K
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
M
A
P
P
I
N
G
L
I
N
K
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
m
a
p
p
i
n
g
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
 
l
i
n
k

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
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
 
]
 
!
=
 
'
1
'
 
&
&
 
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
r
l
 
=
 
g
e
t
_
b
o
o
k
i
n
g
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
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
(
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
 
]
 
=
=
 
'
1
'
 
|
|
 
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
 
]
 
=
=
 
'
1
'
)
)
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
_
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
)
 
{
 
/
/
 
W
e
'
l
l
 
a
d
d
 
a
n
 
i
n
v
a
l
i
d
 
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
 
i
f
 
t
h
e
 
f
i
x
e
d
 
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
 
s
e
t
t
i
n
g
 
i
s
 
s
e
t
 
t
o
 
Y
e
s
.
 
T
h
i
s
 
w
a
y
 
w
e
 
c
a
n
 
f
o
r
c
e
 
t
h
e
 
b
o
o
k
i
n
g
 
e
n
g
i
n
e
 
t
o
 
s
e
e
 
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
 
d
a
t
e
 
i
s
 
w
r
o
n
g
 
a
n
d
 
i
t
'
l
l
 
r
e
b
u
i
l
d
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
r
o
o
m
s
 
l
i
s
t
,
 
w
h
i
c
h
 
i
t
 
d
o
e
s
n
'
t
 
i
f
 
t
h
e
 
d
a
t
e
 
i
s
 
c
o
r
r
e
c
t
 
w
h
e
n
 
c
o
m
i
n
g
 
f
r
o
m
 
t
h
e
 
B
o
o
k
 
a
 
r
o
o
m
 
l
i
n
k
.

 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
.
=
 
'
&
a
m
p
;
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
=
2
0
0
9
-
0
1
-
0
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
$
u
r
l
 
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
u
r
l
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
L
I
N
K
'
 
]
 
=
 
$
u
r
l
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
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
M
E
N
U
_
B
O
O
K
T
H
I
S
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
 
f
a
l
s
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
l
i
n
k
[
 
'
L
I
N
K
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
.
"
&
t
a
s
k
=
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
&
a
m
p
;
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
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
_
u
i
d
&
a
m
p
;
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
=
2
0
0
9
-
0
1
-
0
1
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
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

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
B
O
O
K
I
N
G
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
$
l
i
n
k
[
 
'
L
I
N
K
'
 
]
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
f
g
-
b
u
t
t
o
n
 
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
>
'
.
$
l
i
n
k
[
 
'
T
E
X
T
'
 
]
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
l
i
s
t
 
l
i
n
k

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
l
i
n
k
[
 
'
L
I
N
K
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
r
o
o
m
s
&
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
.
$
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
L
E
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
r
o
o
m
s
l
i
s
t
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
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
 
l
i
n
k

 
 
 
 
 
 
 
 
$
l
i
n
k
 
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
l
i
n
k
[
 
'
L
I
N
K
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
.
'
&
t
a
s
k
=
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
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
=
'
.
$
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
)
;

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
k
[
 
'
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
o
n
t
a
c
t
u
s
l
i
n
k
[
 
]
 
=
 
$
l
i
n
k
;


 
 
 
 
 
 
 
 
/
/
p
r
i
n
t
 
l
i
n
k

 
 
 
 
 
 
 
 
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
N
T
_
I
C
O
N
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
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
P
r
i
n
t
e
r
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
[
 
'
P
R
I
N
T
_
L
I
N
K
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
_
u
i
d
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
,
'
&
j
r
_
p
r
i
n
t
a
b
l
e
=
1
&
p
o
p
u
p
=
1
&
t
m
p
l
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
t
m
p
l
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
)
)
)
;

 
 
 
 
 
 
 
 
/
/
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
t
a
i
l
s
 
b
u
t
t
o
n
s
/
l
i
n
k
s
 
e
n
d


 
 
 
 
 
 
 
 
/
/
r
e
a
l
 
e
s
t
a
t
e
 
p
r
o
p
e
r
t
y
 
p
r
i
c
e

 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
1
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
A
L
_
E
S
T
A
T
E
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
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
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
-
>
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
r
i
c
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
R
E
A
L
_
E
S
T
A
T
E
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
P
R
I
C
E
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
q
r
 
c
o
d
e

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
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
]
 
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
0
6
0
0
0
'
,
 
'
s
h
o
w
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
q
r
_
c
o
d
e
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
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
t
a
b
s
 
c
o
n
t
e
n
t

 
 
 
 
 
 
 
 
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
_
u
i
d
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
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
3
5
'
,
 
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
;

	
	

	
	
i
f
 
(
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
 
]
 
=
=
 
0
)
 
{

	
	
	
u
n
s
e
t
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
 
'
0
0
0
3
5
'
 
]
 
[
'
t
a
b
c
o
n
t
e
n
t
_
0
4
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
_
c
a
l
e
n
d
a
r
'
]
)
;

	
	
}

 

 
 
 
 
 
 
 
 
/
/
s
e
t
 
c
o
n
t
e
n
t
/
t
a
b
s
 
t
h
a
t
 
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
 
i
n
l
i
n
e

 
 
 
 
 
 
 
 
$
s
t
a
n
d
a
l
o
n
e
_
e
l
e
m
e
n
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
 
]
 
=
=
 
'
0
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
j
r
_
p
r
i
n
t
a
b
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
n
d
a
l
o
n
e
_
e
l
e
m
e
n
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
T
A
B
C
O
N
T
E
N
T
_
0
1
_
M
A
I
N
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
T
A
B
C
O
N
T
E
N
T
_
0
1
_
M
O
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
T
A
B
C
O
N
T
E
N
T
_
0
2
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
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
T
A
B
C
O
N
T
E
N
T
_
0
2
_
M
A
P
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
T
A
B
C
O
N
T
E
N
T
_
0
3
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
T
A
B
C
O
N
T
E
N
T
_
0
6
_
E
X
T
R
A
S
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
t
a
b
s

 
 
 
 
 
 
 
 
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
 
'
0
0
0
3
5
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
t
i
t
l
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
t
a
b
_
c
o
n
t
e
n
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
t
a
b
_
a
c
t
i
v
e
 
=
 
f
a
l
s
e
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
 
'
0
0
0
3
5
'
 
]
 
a
s
 
$
k
e
y
 
=
>
 
$
t
a
b
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
b
s
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
,
 
$
s
t
a
n
d
a
l
o
n
e
_
e
l
e
m
e
n
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
b
s
[
 
'
T
A
B
_
A
N
C
H
O
R
'
 
]
 
!
=
 
'
'
 
&
&
 
$
t
a
b
s
[
 
'
T
A
B
_
T
I
T
L
E
'
 
]
 
!
=
 
'
'
 
&
&
 
$
t
a
b
s
[
 
'
T
A
B
_
C
O
N
T
E
N
T
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
!
$
t
a
b
_
a
c
t
i
v
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
c
l
a
s
s
 
=
 
'
a
c
t
i
v
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
a
c
t
i
v
e
 
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
a
b
_
c
l
a
s
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
e
n
t
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
C
O
N
T
E
N
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
T
I
T
L
E
'
 
]
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
t
a
b
s
[
 
'
T
A
B
_
I
D
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
i
d
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
I
D
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
t
a
b
_
i
d
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
T
I
T
L
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
t
i
t
l
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
T
A
B
_
A
N
C
H
O
R
'
 
=
>
 
$
t
a
b
s
[
 
'
T
A
B
_
A
N
C
H
O
R
'
 
]
,
 
'
T
A
B
_
T
I
T
L
E
'
 
=
>
 
$
t
i
t
l
e
,
 
'
A
C
T
I
V
E
'
 
=
>
 
$
t
a
b
_
c
l
a
s
s
,
 
'
T
A
B
_
I
D
'
 
=
>
 
$
t
a
b
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
b
_
c
o
n
t
e
n
t
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
T
A
B
_
C
O
N
T
E
N
T
'
 
=
>
 
$
c
o
n
t
e
n
t
,
 
'
T
A
B
_
T
I
T
L
E
'
 
=
>
 
$
t
i
t
l
e
,
 
'
T
A
B
_
A
N
C
H
O
R
'
 
=
>
 
$
t
a
b
s
[
 
'
T
A
B
_
A
N
C
H
O
R
'
 
]
,
 
'
A
C
T
I
V
E
'
 
=
>
 
$
t
a
b
_
c
l
a
s
s
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
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
.
'
_
t
a
b
t
i
t
l
e
'
)
 
]
 
=
 
$
t
i
t
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
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
.
'
_
t
a
b
_
c
o
n
t
e
n
t
'
)
 
]
 
=
 
$
c
o
n
t
e
n
t
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
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
 
=
=
 
'
T
A
B
C
O
N
T
E
N
T
_
0
6
_
E
X
T
R
A
S
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
_
o
u
t
p
u
t
 
[
0
]
[
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
C
O
N
T
E
N
T
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
C
O
N
T
E
N
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
_
o
u
t
p
u
t
 
[
0
]
[
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
T
I
T
L
E
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
T
I
T
L
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
_
o
u
t
p
u
t
 
[
0
]
[
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
A
N
C
H
O
R
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
A
N
C
H
O
R
'
 
]
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
t
r
a
s
_
o
u
t
p
u
t
'
,
 
$
e
x
t
r
a
s
_
o
u
t
p
u
t
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
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
C
O
N
T
E
N
T
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
C
O
N
T
E
N
T
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
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
T
I
T
L
E
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
T
I
T
L
E
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
 
s
t
r
t
o
u
p
p
e
r
(
$
k
e
y
)
.
'
_
A
N
C
H
O
R
'
 
]
 
=
 
$
t
a
b
s
[
 
'
T
A
B
_
A
N
C
H
O
R
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
t
a
b
s
_
t
i
t
l
e
s
'
,
 
$
t
a
b
_
t
i
t
l
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
t
a
b
s
_
c
o
n
t
e
n
t
'
,
 
$
t
a
b
_
c
o
n
t
e
n
t
s
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
l
l
 
o
u
t
p
u
t
 
i
s
 
b
u
i
l
t
 
b
y
 
n
o
w
,
 
s
o
 
l
e
t
`
s
 
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
 
p
a
g
e

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
l
i
n
k
'
,
 
$
b
o
o
k
i
n
g
l
i
n
k
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
l
i
d
e
s
h
o
w
l
i
n
k
'
,
 
$
s
l
i
d
e
s
h
o
w
l
i
n
k
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
0
 
&
&
 
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
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
a
r
i
f
f
s
l
i
n
k
'
,
 
$
t
a
r
i
f
f
s
l
i
n
k
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
a
l
l
e
r
y
l
i
n
k
'
,
 
$
g
a
l
l
e
r
y
l
i
n
k
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
0
'
 
&
&
 
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
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
s
l
i
s
t
l
i
n
k
'
,
 
$
r
o
o
m
s
l
i
s
t
l
i
n
k
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
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
m
a
p
p
i
n
g
l
i
n
k
'
,
 
$
m
a
p
p
i
n
g
l
i
n
k
 
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
c
o
n
t
a
c
t
u
s
l
i
n
k
'
,
 
$
c
o
n
t
a
c
t
u
s
l
i
n
k
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
j
r
_
p
r
i
n
t
a
b
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
_
p
r
i
n
t
a
b
l
e
.
h
t
m
l
'
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
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
.
h
t
m
l
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
_
n
o
t
a
b
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
/
/
t
r
i
g
g
e
r
 
p
o
i
n
t
 
a
f
t
e
r
 
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
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
1
6
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
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
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
)
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
T
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
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
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
P
A
T
H
W
A
Y
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
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
P
A
T
H
W
A
Y
_
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
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
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
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
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
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
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
T
I
T
L
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
F
R
O
N
T
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
M
A
P
P
I
N
G
L
I
N
K
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
M
A
P
P
I
N
G
L
I
N
K
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
L
I
S
T
T
A
R
I
F
F
_
T
I
T
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
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
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
N
A
M
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
S
T
R
E
E
T
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
T
O
W
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
P
O
S
T
C
O
D
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
T
E
L
E
P
H
O
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
T
E
L
E
P
H
O
N
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
F
A
X
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
F
E
A
T
U
R
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
M
A
P
P
I
N
G
L
I
N
K
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
M
A
P
P
I
N
G
L
I
N
K
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
P
R
O
P
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
P
R
O
P
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
H
E
C
K
I
N
T
I
M
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
H
E
C
K
I
N
T
I
M
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
A
R
E
A
A
C
T
I
V
I
T
I
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
A
R
E
A
A
C
T
I
V
I
T
I
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
D
R
I
V
I
N
G
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
D
R
I
V
I
N
G
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
A
I
R
P
O
R
T
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
A
I
R
P
O
R
T
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
O
T
H
E
R
T
R
A
N
S
P
O
R
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
O
T
H
E
R
T
R
A
N
S
P
O
R
T
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
P
O
L
I
C
I
E
S
D
I
S
C
L
A
I
M
E
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
P
O
L
I
C
I
E
S
D
I
S
C
L
A
I
M
E
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
_
T
I
T
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
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
A
D
D
R
E
S
S
_
T
I
T
L
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
C
O
M
_
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
_
T
I
T
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
A
_
B
A
S
I
C
T
E
M
P
L
A
T
E
_
S
H
O
W
D
E
T
A
I
L
S
_
T
I
T
L
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
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
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
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
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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
M
A
P
P
I
N
G
L
I
N
K
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
M
A
P
P
I
N
G
L
I
N
K
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
G
A
L
L
E
R
Y
L
I
N
K
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
G
A
L
L
E
R
Y
L
I
N
K
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
T
A
R
I
F
F
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
R
E
V
I
E
W
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
R
E
V
I
E
W
S
'
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

