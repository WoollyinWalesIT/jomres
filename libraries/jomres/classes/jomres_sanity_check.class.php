
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
o
m
r
e
s
_
s
a
n
i
t
y
_
c
h
e
c
k

{

 
 
 
 
p
u
b
l
i
c
 
$
w
a
r
n
i
n
g
s
;

 
 
 
 
p
u
b
l
i
c
 
$
w
a
r
n
i
n
g
_
c
o
u
n
t
e
r
;

 
 
 
 

 
 
 
 
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
a
u
t
o
r
u
n
 
=
 
t
r
u
e
 
,
 
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
 
0
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
o
_
h
t
m
l
'
)
 
=
=
 
1
 
|
|
 
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
p
o
p
u
p
'
)
 
=
=
 
1
 
|
|
 
A
J
A
X
C
A
L
L
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
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
=
 
'
'
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
_
u
i
d
 
>
 
0
 
)

	
	
	
$
t
h
i
s
-
>
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
;

 
 
 
 
 
 
 
 
i
f
 
(
$
a
u
t
o
r
u
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
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
-
>
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
)
;

	
	
	
$
t
h
i
s
-
>
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
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
_
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}


	
/
*

	
B
l
i
n
d
 
f
l
a
g
 
i
s
 
f
o
r
 
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
 
c
r
e
a
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
 
t
h
a
t
 
n
e
e
d
 
t
o
 
b
e
 
c
h
e
c
k
e
d

	
*
/

	

 
 
 
 
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
 
d
o
_
s
a
n
i
t
y
_
c
h
e
c
k
s
(
 
$
b
l
i
n
d
 
=
 
f
a
l
s
e
 
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
o
_
h
t
m
l
'
)
 
=
=
 
1
 
|
|
 
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
p
o
p
u
p
'
)
 
=
=
 
1
 
|
|
 
A
J
A
X
C
A
L
L
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
 
|
|
 
$
b
l
i
n
d
 
=
=
 
t
r
u
e
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
e
d
i
t
i
n
g
_
m
o
d
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
s
u
s
p
e
n
d
e
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
n
c
l
u
d
e
_
r
o
o
m
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
'
)
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
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
s
r
p
_
r
o
o
m
_
e
x
i
s
t
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
s
r
p
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
e
t
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
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
m
r
p
_
r
o
o
m
s
_
e
x
i
s
t
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
s
_
g
u
e
s
t
_
t
y
p
e
s
_
p
p
p
n
(
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
-
>
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
n
c
l
u
d
e
_
r
o
o
m
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
s
_
t
a
r
i
f
f
s
_
e
x
i
s
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
t
o
u
r
s
_
e
x
i
s
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
a
d
d
r
e
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
m
a
i
n
_
i
m
a
g
e
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
)
 
=
=
 
'
'
)
 
{

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
m
a
r
k
_
a
s
_
c
o
m
p
l
e
t
e
(
)
;
 
/
/
 
A
d
d
 
a
 
f
l
a
g
 
t
h
a
t
 
w
i
l
l
 
s
h
o
w
 
s
i
t
e
 
m
a
n
a
g
e
r
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
r
e
a
d
y
 
t
o
 
b
e
 
r
e
v
i
e
w
e
d
 
a
f
t
e
r
 
c
r
e
a
t
i
o
n
 
a
n
d
 
w
h
e
n
 
i
t
 
i
s
 
w
a
i
t
i
n
g
 
a
p
p
r
o
v
a
l

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
a
p
p
r
o
v
e
d
(
)
;

	
	
	
	

	
	
	
	
i
f
 
(
t
r
i
m
(
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
)
 
=
=
 
'
'
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
p
u
b
l
i
s
h
e
d
(
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
t
h
i
s
-
>
m
a
r
k
_
a
s
_
i
n
c
o
m
p
l
e
t
e
(
)
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
R
e
g
i
s
t
e
r
e
d
)
 
{

	
	
	
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
s
 
.
=
 
$
t
h
i
s
-
>
c
h
e
c
k
_
f
o
r
_
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
(
)
;

	
	
}

	
	

	
	
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
w
a
r
n
i
n
g
s
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
w
a
r
n
i
n
g
(
$
m
e
s
s
a
g
e
_
a
r
r
a
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
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

 
 
 
 
 
 
 
 
/
/
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
t
h
i
s
-
>
w
a
r
n
i
n
g
_
c
o
u
n
t
e
r
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
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
I
N
K
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
'
L
I
N
K
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
I
N
K
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
B
U
T
T
O
N
_
T
E
X
T
'
]
 
=
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
B
U
T
T
O
N
_
T
E
X
T
'
]
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
B
A
C
K
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
s
a
n
i
t
y
_
c
h
e
c
k
s
_
b
u
t
t
o
n
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
 
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
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
A
B
E
L
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
A
B
E
L
'
]
 
=
 
'
w
a
r
n
i
n
g
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
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
[
'
L
A
B
E
L
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
W
A
R
N
I
N
G
_
W
O
R
D
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
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
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
W
A
R
N
I
N
G
S
_
D
A
N
G
E
R
W
I
L
L
R
O
B
I
N
S
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
W
A
R
N
I
N
G
_
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
 
$
m
e
s
s
a
g
e
_
a
r
r
a
y
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
W
A
R
N
I
N
G
_
C
O
U
N
T
E
R
'
]
 
=
 
$
t
h
i
s
-
>
w
a
r
n
i
n
g
_
c
o
u
n
t
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
A
C
T
I
O
N
_
L
I
N
K
'
]
 
=
 
$
b
u
t
t
o
n
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
B
A
C
K
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
s
a
n
i
t
y
_
c
h
e
c
k
_
p
a
n
e
.
h
t
m
l
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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

 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
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
 
m
a
r
k
_
a
s
_
c
o
m
p
l
e
t
e
(
)
 
{

	
	
/
/
 
T
h
i
s
 
i
s
 
o
n
l
y
 
t
r
i
g
g
e
r
e
d
 
i
f
 
a
 
p
r
o
p
e
r
t
y
 
d
o
e
s
n
'
t
 
h
a
v
e
 
a
n
y
 
w
a
r
n
i
n
g
s
 
f
i
r
e
d
 
(
a
d
d
r
e
s
s
,
 
i
m
a
g
e
s
 
e
t
c
)

	
	

	
	
/
/
 
I
f
 
p
r
o
p
e
r
t
y
 
i
s
 
m
a
r
k
e
d
 
a
s
 
a
p
p
r
o
v
e
d
,
 
w
e
 
k
n
o
w
 
i
t
 
h
a
s
 
b
e
e
n
 
c
o
m
p
l
e
t
e
d
,
 
s
o
 
t
o
 
s
a
v
e
 
p
e
r
f
o
r
m
a
n
c
e
 
w
e
'
l
l
 
t
r
o
t
 
r
i
g
h
t
 
a
l
o
n
g
 
t
o
 
t
h
e
 
n
e
x
t
 
c
h
e
c
k
.

	
	
/
/
 
I
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
 
i
s
 
a
l
r
e
a
d
y
 
p
u
b
l
i
s
h
e
d
,
 
w
e
 
w
i
l
l
 
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
 
m
a
r
k
 
i
t
 
a
s
 
c
o
m
p
l
e
t
e
d
.
 
T
h
i
s
 
p
r
e
v
e
n
t
s
 
p
r
e
v
i
o
u
s
l
y
 
a
p
p
r
o
v
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
 
f
r
o
m
 
n
e
e
d
i
n
g
 
t
o
 
b
e
 
c
h
e
c
k
e
d

	
	

	
	
/
/
 
C
h
e
c
k
 
t
o
 
s
e
e
 
i
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
 
h
a
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
m
a
r
k
e
d
 
a
s
 
c
o
m
p
l
e
t
e
d
.
 
I
f
 
y
e
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
 
o
n
.
 
I
f
 
n
o
,
 
s
e
t
 
t
h
e
 
C
o
m
p
l
e
t
e
d
 
f
l
a
g
 
t
o
 
y
e
s
.

	
	

	
	
/
/
 
I
f
 
i
t
 
i
s
 
n
o
t
,
 
w
e
 
w
i
l
l
 
c
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
C
o
m
p
l
e
t
e
d
 
f
l
a
g
 
i
s
 
s
e
t
 
t
o
 
0
.
 
I
f
 
i
t
 
i
s
,
 
w
e
'
l
l
 
s
e
t
 
i
t
 
t
o

	
	

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
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
c
o
m
p
l
e
t
e
d
)
 
{
 

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	

	
	
$
j
o
m
r
e
s
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
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
$
t
h
i
s
-
>
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
j
o
m
r
e
s
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
-
>
s
e
t
C
o
m
p
l
e
t
e
d
(
1
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
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
 
m
a
r
k
_
a
s
_
i
n
c
o
m
p
l
e
t
e
(
)
 
{

	
	
/
/
 
T
h
i
s
 
i
s
 
o
n
l
y
 
t
r
i
g
g
e
r
e
d
 
i
f
 
a
 
p
r
o
p
e
r
t
y
 
h
a
s
 
w
a
r
n
i
n
g
s
 
f
i
r
e
d
 
(
a
d
d
r
e
s
s
,
 
i
m
a
g
e
s
 
e
t
c
)

	
	
/
/
 
s
e
t
s
 
t
h
e
 
c
o
m
p
l
e
t
e
d
 
f
l
a
g
 
t
o
 
0
,
 
m
a
k
e
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
 
r
e
q
u
i
r
e
 
a
 
n
e
w
 
a
p
p
r
o
v
a
l
 
a
n
d
 
a
l
s
o
 
u
n
p
u
b
l
i
s
h
e
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
t
h
i
s
-
>
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
c
o
m
p
l
e
t
e
d
)
 
{
 

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}

	
	

	
	
$
j
o
m
r
e
s
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
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
$
t
h
i
s
-
>
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
j
o
m
r
e
s
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
-
>
s
e
t
C
o
m
p
l
e
t
e
d
(
0
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
]
 
=
=
 
'
0
'
)
 
{

	
	
	
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
a
p
p
r
o
v
e
d
 
=
=
 
1
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
-
>
s
e
t
A
p
p
r
o
v
e
d
(
0
)
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
=
 
1
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
-
>
s
e
t
P
u
b
l
i
s
h
e
d
(
0
)
;

	
	
	
}

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
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
 
c
h
e
c
k
_
f
o
r
_
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
(
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
]
 
=
=
 
"
0
"
)

	
	
	
r
e
t
u
r
n
;

	

	
	
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
 
c
o
n
t
r
a
c
t
_
u
i
d
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
u
s
e
r
_
i
d
 
=
 
"
.
(
i
n
t
)
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
;

	
	
$
r
e
v
i
e
w
s
_
d
a
t
a
 
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

	
	

	
	
$
r
e
v
i
e
w
s
_
c
o
n
t
r
a
c
t
_
u
i
d
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
r
e
v
i
e
w
s
_
d
a
t
a
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
r
e
v
i
e
w
s
_
d
a
t
a
 
a
s
 
$
r
e
v
i
e
w
 
)
 
{

	
	
	
	
$
r
e
v
i
e
w
s
_
c
o
n
t
r
a
c
t
_
u
i
d
s
[
]
=
$
r
e
v
i
e
w
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
	
}

	
	
}

	
	

	
	
$
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
 
=
 
0
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
 
g
u
e
s
t
s
_
u
i
d
 
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
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
i
d
 
=
 
'
"
.
(
i
n
t
)
 
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
.
"
'
 
"
;

	
	
$
g
u
e
s
t
s
_
u
i
d
s
 
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

	
	
$
a
l
l
G
u
e
s
t
U
i
d
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

	
	

	
	
/
/
 
B
e
c
a
u
s
e
 
a
 
n
e
w
 
r
e
c
o
r
d
 
i
s
 
m
a
d
e
 
i
n
 
t
h
e
 
g
u
e
s
t
s
 
t
a
b
l
e
 
f
o
r
 
e
a
c
h
 
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
 
t
h
e
 
g
u
e
s
t
 
r
e
g
i
s
t
e
r
s
 
i
n
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
l
l
 
t
h
e
 
g
u
e
s
t
 
u
i
d
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r

	
	
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
g
u
e
s
t
s
_
u
i
d
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
g
u
e
s
t
s
_
u
i
d
s
 
a
s
 
$
g
)
 
{

	
	
	
	
$
a
l
l
G
u
e
s
t
U
i
d
s
[
 
]
 
=
 
$
g
-
>
g
u
e
s
t
s
_
u
i
d
;

	
	
	
}

	
	
}

	
	

	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
c
o
n
t
r
a
c
t
_
u
i
d
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
g
u
e
s
t
_
u
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
a
l
l
G
u
e
s
t
U
i
d
s
)
.
'
)
 
A
N
D
 
b
o
o
k
e
d
o
u
t
 
 
=
 
1
'
;

	
	
$
c
o
n
t
r
a
c
t
s
 
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
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
s
 
a
s
 
$
c
o
n
t
r
a
c
t
 
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
 
$
c
o
n
t
r
a
c
t
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
,
 
$
r
e
v
i
e
w
s
_
c
o
n
t
r
a
c
t
_
u
i
d
s
 
)
 
)
 
{

	
	
	
	
	
$
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
+
+
;

	
	
	
	
}

	
	
	
}

	
	
}


	
	
i
f
 
(
 
$
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
>
0
 
)
 
{

	
	
	
$
m
e
s
s
a
g
e
 
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
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
1
'
,
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
1
'
,
 
f
a
l
s
e
)
.
$
u
n
r
e
v
i
e
w
e
d
_
b
o
o
k
i
n
g
s
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
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
2
'
,
 
'
R
E
V
I
E
W
_
R
E
M
I
N
D
E
R
_
P
T
2
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
m
u
l
i
s
t
b
o
o
k
i
n
g
s
&
u
n
r
e
v
i
e
w
e
d
'
)
;

	
	
	
$
b
u
t
t
o
n
_
t
e
x
t
 
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
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
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
M
R
_
M
E
N
U
_
A
D
M
I
N
_
L
I
S
T
B
O
O
K
I
N
G
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

	
	
}


 
 
 
 
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
 
c
h
e
c
k
_
t
o
u
r
s
_
e
x
i
s
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
j
i
n
t
o
u
r
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
s
 
=
 
j
i
n
t
o
u
r
_
g
e
t
_
a
l
l
_
t
o
u
r
s
(
$
t
h
i
s
-
>
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
f
u
t
u
r
e
_
t
o
u
r
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
o
d
a
y
 
=
 
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
o
u
r
s
 
a
s
 
$
t
o
u
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
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
t
o
u
r
[
'
t
o
u
r
d
a
t
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
d
a
t
e
 
=
 
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
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
t
e
m
p
A
r
r
[
1
]
,
 
$
t
e
m
p
A
r
r
[
2
]
,
 
$
t
e
m
p
A
r
r
[
0
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
$
t
o
d
a
y
)
 
<
 
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
$
t
o
u
r
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
t
u
r
e
_
t
o
u
r
s
[
]
 
=
 
$
t
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
f
u
t
u
r
e
_
t
o
u
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
j
i
n
t
o
u
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
J
I
N
T
O
U
R
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
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
 
c
h
e
c
k
_
a
d
d
r
e
s
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
e
d
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
'
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
t
h
i
s
-
>
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
t
r
e
e
t
 
=
=
 
'
'
 
|
|
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
w
n
 
=
=
 
'
'
 
|
|
 

	
	
	
	
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
g
i
o
n
 
=
=
 
'
'
 
|
|
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
d
e
 
=
=
 
'
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
e
d
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
A
D
D
R
E
S
S
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
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
 
c
h
e
c
k
_
m
a
i
n
_
i
m
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
'
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
t
h
i
s
-
>
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
i
m
a
g
e
s
(
$
t
h
i
s
-
>
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
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
i
m
a
g
e
 
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
!
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
i
m
a
g
e
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
'
]
[
0
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
 
|
|
 
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
i
m
a
g
e
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
'
]
[
0
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
 
=
=
 
$
n
o
i
m
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
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
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
&
u
p
l
o
a
d
_
c
o
n
t
e
x
t
=
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
I
M
A
G
E
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
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
 
c
h
e
c
k
_
a
p
p
r
o
v
e
d
(
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
t
h
i
s
-
>
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
a
p
p
r
o
v
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
A
P
P
R
O
V
A
L
S
_
N
O
T
_
A
P
P
R
O
V
E
D
_
Y
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
A
P
P
R
O
V
A
L
S
_
N
O
T
_
A
P
P
R
O
V
E
D
_
Y
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
_
s
u
s
p
e
n
d
e
d
(
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
S
u
s
p
e
n
d
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
s
_
g
u
e
s
t
_
t
y
p
e
s
_
p
p
p
n
(
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
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
g
n
o
r
e
_
o
n
_
t
a
s
k
s
 
=
 
a
r
r
a
y
(
'
l
i
s
t
C
u
s
t
o
m
e
r
T
y
p
e
s
'
,
 
'
e
d
i
t
C
u
s
t
o
m
e
r
T
y
p
e
'
,
 
'
s
a
v
e
C
u
s
t
o
m
e
r
T
y
p
e
'
,
 
'
d
e
l
e
t
e
C
u
s
t
o
m
e
r
T
y
p
e
'
,
 
'
s
a
v
e
C
u
s
t
o
m
e
r
T
y
p
e
O
r
d
e
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
,
 
$
i
g
n
o
r
e
_
o
n
_
t
a
s
k
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
i
d
`
 
F
R
O
M
 
`
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
c
u
s
t
o
m
e
r
t
y
p
e
s
`
 
w
h
e
r
e
 
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
(
i
n
t
)
 
$
t
h
i
s
-
>
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
.
'
 
A
N
D
 
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
 
1
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
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
 
]
 
=
=
 
1
 
&
&
 
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
W
A
R
N
I
N
G
S
_
P
E
R
P
E
R
S
O
N
P
E
R
N
I
G
H
T
_
N
O
G
U
E
S
T
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
W
A
R
N
I
N
G
S
_
P
E
R
P
E
R
S
O
N
P
E
R
N
I
G
H
T
_
N
O
G
U
E
S
T
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
l
i
s
t
C
u
s
t
o
m
e
r
T
y
p
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
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
C
O
N
F
I
G
_
V
A
R
I
A
N
C
E
S
_
C
U
S
T
O
M
E
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
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
 
c
h
e
c
k
s
_
t
a
r
i
f
f
s
_
e
x
i
s
t
(
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
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
n
c
l
u
d
e
_
r
o
o
m
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
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
i
g
n
o
r
e
_
o
n
_
t
a
s
k
s
 
=
 
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
a
d
m
i
n
'
,
 
'
e
d
i
t
T
a
r
i
f
f
'
,
 
'
s
a
v
e
T
a
r
i
f
f
'
,
 
'
e
d
i
t
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
c
r
o
m
a
n
a
g
e
'
,
 
'
l
i
s
t
_
t
a
r
i
f
f
s
_
m
i
c
r
o
m
a
n
a
g
e
'
,
 
'
l
i
s
t
_
t
a
r
i
f
f
s
_
a
d
v
a
n
c
e
d
'
,
 
'
e
d
i
t
_
t
a
r
i
f
f
_
a
d
v
a
n
c
e
d
'
,
 
'
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
,
 
$
i
g
n
o
r
e
_
o
n
_
t
a
s
k
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
r
a
t
e
s
_
u
i
d
`
 
F
R
O
M
 
`
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
a
t
e
s
`
 
w
h
e
r
e
 
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
(
i
n
t
)
 
$
t
h
i
s
-
>
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
.
'
'
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
r
e
s
u
l
t
)
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
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
_
S
R
P
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
W
A
R
N
I
N
G
S
_
T
A
R
I
F
F
S
_
N
O
T
A
R
I
F
F
S
_
S
R
P
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
t
h
i
s
-
>
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
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
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
l
i
s
t
_
t
a
r
i
f
f
s
_
a
d
v
a
n
c
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
l
i
s
t
_
t
a
r
i
f
f
s
_
m
i
c
r
o
m
a
n
a
g
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
T
A
R
I
F
F
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
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
 
c
h
e
c
k
_
e
d
i
t
i
n
g
_
m
o
d
e
(
)

 
 
 
 
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
$
t
h
i
s
-
>
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
 
]
 
=
=
 
'
1
'
 
&
&
 
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
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
e
d
i
t
i
n
g
_
o
n
'
 
]
 
=
=
 
t
r
u
e
 
&
&
 
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
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
W
A
R
N
I
N
G
S
_
G
L
O
B
A
L
E
D
I
T
I
N
G
M
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
W
A
R
N
I
N
G
S
_
G
L
O
B
A
L
E
D
I
T
I
N
G
M
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
A
B
E
L
'
 
=
>
 
'
d
a
n
g
e
r
'
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
_
p
u
b
l
i
s
h
e
d
(
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
t
h
i
s
-
>
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
p
u
b
l
i
s
h
e
d
 
!
=
 
1
 
&
&
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
A
N
I
T
Y
_
C
H
E
C
K
_
N
O
T
_
P
U
B
L
I
S
H
E
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
S
A
N
I
T
Y
_
C
H
E
C
K
_
N
O
T
_
P
U
B
L
I
S
H
E
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
p
u
b
l
i
s
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
t
h
i
s
-
>
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
b
u
t
t
o
n
_
t
e
x
t
 
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
U
B
L
I
S
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
U
B
L
I
S
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
_
s
r
p
_
r
o
o
m
_
e
x
i
s
t
s
(
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
 
'
0
'
 
&
&
 
$
t
h
i
s
-
>
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
 
]
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
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
t
h
i
s
-
>
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
!
i
s
s
e
t
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
o
o
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
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
S
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
S
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
_
s
r
p
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
e
t
(
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
 
'
0
'
 
&
&
 
$
t
h
i
s
-
>
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
 
]
 
!
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
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
t
h
i
s
-
>
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
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
o
o
m
_
t
y
p
e
s
 
a
s
 
$
r
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
t
[
'
a
b
b
v
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
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
S
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
S
R
P
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
T
Y
P
E
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
c
h
e
c
k
_
m
r
p
_
r
o
o
m
s
_
e
x
i
s
t
s
(
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
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
(
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
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
t
h
i
s
-
>
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
!
i
s
s
e
t
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
o
o
m
s
)
 
|
|
 
e
m
p
t
y
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
o
o
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
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
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
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
$
t
h
i
s
-
>
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
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
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
e
d
i
t
_
r
e
s
o
u
r
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
t
t
o
n
_
t
e
x
t
 
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
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
M
R
P
_
R
O
O
M
S
_
E
X
I
S
T
_
S
A
N
I
T
Y
_
C
H
E
C
K
_
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
a
r
n
i
n
g
(
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
m
e
s
s
a
g
e
,
 
'
L
I
N
K
'
 
=
>
 
$
l
i
n
k
,
 
'
B
U
T
T
O
N
_
T
E
X
T
'
 
=
>
 
$
b
u
t
t
o
n
_
t
e
x
t
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

