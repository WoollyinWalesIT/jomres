
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


/
/
 
G
o
o
d
 
o
l
'
 
1
a
n
d
1

$
t
m
p
 
=
 
s
u
b
s
t
r
(
s
t
r
s
t
r
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
h
o
s
t
'
)
,
 
'
:
'
)
,
 
1
)
;

$
p
o
r
t
 
=
 
n
u
l
l
;

$
s
o
c
k
e
t
 
=
 
n
u
l
l
;

$
h
o
s
t
 
=
 
'
'
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
t
m
p
)
)
 
{

 
 
 
 
/
/
 
G
e
t
 
t
h
e
 
p
o
r
t
 
n
u
m
b
e
r
 
o
r
 
s
o
c
k
e
t
 
n
a
m
e

 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
t
m
p
)
)
 
{

 
 
 
 
 
 
 
 
$
p
o
r
t
 
=
 
$
t
m
p
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
s
o
c
k
e
t
 
=
 
$
t
m
p
;

 
 
 
 
}

 
 
 
 
/
/
 
E
x
t
r
a
c
t
 
t
h
e
 
h
o
s
t
 
n
a
m
e
 
o
n
l
y

 
 
 
 
$
h
o
s
t
 
=
 
s
u
b
s
t
r
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
h
o
s
t
'
)
,
 
0
,
 
s
t
r
l
e
n
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
h
o
s
t
'
)
)
 
-
 
(
s
t
r
l
e
n
(
$
t
m
p
)
 
+
 
1
)
)
;

}


/
/
 
T
h
i
s
 
w
i
l
l
 
t
a
k
e
 
c
a
r
e
 
o
f
 
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
 
n
o
t
a
t
i
o
n
:
 
"
:
3
3
0
6
"

i
f
 
(
$
h
o
s
t
 
=
=
 
'
'
)
 
{

 
 
 
 
$
h
o
s
t
 
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
h
o
s
t
'
)
;

}

s
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
h
o
s
t
'
,
 
$
h
o
s
t
)
;

s
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
r
t
'
,
 
$
p
o
r
t
)
;

s
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
s
o
c
k
e
t
'
,
 
$
s
o
c
k
e
t
)
;


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
d
a
t
a
b
a
s
e

{

	
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

	

	
p
r
i
v
a
t
e
 
$
l
i
n
k
;

	

	
p
r
i
v
a
t
e
 
$
P
D
O
;

	

	
p
r
i
v
a
t
e
 
$
s
t
m
t
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
C
h
e
c
k
 
i
f
 
m
a
g
i
c
_
q
u
o
t
e
s
_
r
u
n
t
i
m
e
 
i
s
 
a
c
t
i
v
e

 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
m
a
g
i
c
_
q
u
o
t
e
s
_
r
u
n
t
i
m
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
e
a
c
t
i
v
a
t
e

 
 
 
 
 
 
 
 
 
 
 
 
@
s
e
t
_
m
a
g
i
c
_
q
u
o
t
e
s
_
r
u
n
t
i
m
e
(
f
a
l
s
e
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
l
i
n
k
 
=
 
n
u
l
l
;

	
	
$
t
h
i
s
-
>
P
D
O
 
=
 
n
u
l
l
;

	
	
$
t
h
i
s
-
>
q
u
e
r
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
n
u
l
l
;

	
	
$
t
h
i
s
-
>
l
a
s
t
_
i
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
b
t
y
p
e
 
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
d
b
t
y
p
e
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
d
b
_
p
r
e
f
i
x
 
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
d
b
p
r
e
f
i
x
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
d
b
t
y
p
e
 
!
=
 
'
p
d
o
m
y
s
q
l
'
 
|
|
 
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
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
d
b
t
y
p
e
 
=
 
'
m
y
s
q
l
i
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
 
|
|
 
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
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
_
i
n
i
t
(
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
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
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
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
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
 
_
i
n
i
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
o
c
k
e
t
'
)
 
=
=
 
'
/
t
m
p
/
m
y
s
q
l
5
.
s
o
c
k
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
l
i
n
k
 
=
 
m
y
s
q
l
i
_
c
o
n
n
e
c
t
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
h
o
s
t
'
)
,
 
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
u
s
e
r
'
)
,
 
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
a
s
s
w
o
r
d
'
)
,
 
n
u
l
l
,
 
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
r
t
'
)
,
 
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
s
o
c
k
e
t
'
)
)
 
o
r
 
d
i
e
(
'
C
o
u
l
d
 
n
o
t
 
c
o
n
n
e
c
t
 
'
.
m
y
s
q
l
i
_
e
r
r
o
r
(
$
t
h
i
s
-
>
l
i
n
k
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
t
h
i
s
-
>
l
i
n
k
 
=
 
m
y
s
q
l
i
_
c
o
n
n
e
c
t
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
h
o
s
t
'
)
,
 
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
u
s
e
r
'
)
,
 
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
a
s
s
w
o
r
d
'
)
)
 
o
r
 
d
i
e
(
'
C
o
u
l
d
 
n
o
t
 
c
o
n
n
e
c
t
 
'
.
m
y
s
q
l
i
_
e
r
r
o
r
(
$
t
h
i
s
-
>
l
i
n
k
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
i
_
s
e
l
e
c
t
_
d
b
(
$
t
h
i
s
-
>
l
i
n
k
,
 
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
d
b
'
)
)
 
o
r
 
d
i
e
(
'
C
o
u
l
d
 
n
o
t
 
s
e
l
e
c
t
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
i
_
q
u
e
r
y
(
$
t
h
i
s
-
>
l
i
n
k
,
 
'
S
E
T
 
C
H
A
R
A
C
T
E
R
 
S
E
T
 
u
t
f
8
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
i
_
q
u
e
r
y
(
$
t
h
i
s
-
>
l
i
n
k
,
 
'
S
E
T
 
N
A
M
E
S
 
u
t
f
8
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
e
r
r
o
r
 
=
 
m
y
s
q
l
i
_
e
r
r
o
r
(
$
t
h
i
s
-
>
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
k
 
=
 
m
y
s
q
l
_
c
o
n
n
e
c
t
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
h
o
s
t
'
)
,
 
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
u
s
e
r
'
)
,
 
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
a
s
s
w
o
r
d
'
)
)
 
o
r
 
d
i
e
(
'
C
o
u
l
d
 
n
o
t
 
c
o
n
n
e
c
t
 
'
.
m
y
s
q
l
_
e
r
r
o
r
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
_
s
e
l
e
c
t
_
d
b
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
d
b
'
)
)
 
o
r
 
d
i
e
(
'
C
o
u
l
d
 
n
o
t
 
s
e
l
e
c
t
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
_
q
u
e
r
y
(
'
S
E
T
 
C
H
A
R
A
C
T
E
R
 
S
E
T
 
u
t
f
8
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
_
q
u
e
r
y
(
'
S
E
T
 
N
A
M
E
S
 
u
t
f
8
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
e
r
r
o
r
 
=
 
m
y
s
q
l
_
e
r
r
o
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
P
D
O
 
=
 
n
e
w
 
P
D
O
(
'
m
y
s
q
l
:
h
o
s
t
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
h
o
s
t
'
)
.
'
;
d
b
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
d
b
'
)
,
 
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
u
s
e
r
'
)
,
 
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
a
s
s
w
o
r
d
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
P
D
O
-
>
s
e
t
A
t
t
r
i
b
u
t
e
(
P
D
O
:
:
A
T
T
R
_
E
R
R
M
O
D
E
,
 
P
D
O
:
:
E
R
R
M
O
D
E
_
E
X
C
E
P
T
I
O
N
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
P
D
O
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
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
P
D
O
-
>
e
x
e
c
(
'
S
E
T
 
C
H
A
R
A
C
T
E
R
 
S
E
T
 
u
t
f
8
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
P
D
O
-
>
e
x
e
c
(
'
S
E
T
 
N
A
M
E
S
 
u
t
f
8
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
e
r
r
o
r
 
=
 
$
t
h
i
s
-
>
P
D
O
-
>
e
r
r
o
r
I
n
f
o
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
l
o
s
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
 
|
|
 
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
i
_
c
l
o
s
e
(
$
t
h
i
s
-
>
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
P
D
O
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
 
q
u
e
r
y
(
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
 
&
&
 
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
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
l
o
b
a
l
 
$
w
p
d
b
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
$
w
p
d
b
-
>
q
u
e
r
y
(
$
t
h
i
s
-
>
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
$
t
h
i
s
-
>
r
e
s
u
l
t
 
!
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
t
h
i
s
-
>
l
a
s
t
_
i
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
w
p
d
b
-
>
i
n
s
e
r
t
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
s
t
_
i
d
 
=
 
$
w
p
d
b
-
>
i
n
s
e
r
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
 
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
s
u
l
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
$
w
p
d
b
-
>
l
a
s
t
_
e
r
r
o
r
 
!
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
e
r
r
o
r
 
=
 
$
w
p
d
b
-
>
l
a
s
t
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
m
y
s
q
l
i
_
q
u
e
r
y
(
$
t
h
i
s
-
>
l
i
n
k
,
 
$
t
h
i
s
-
>
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
m
y
s
q
l
_
q
u
e
r
y
(
$
t
h
i
s
-
>
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
y
 
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
s
u
l
t
 
=
 
$
t
h
i
s
-
>
P
D
O
-
>
e
x
e
c
(
$
t
h
i
s
-
>
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
P
D
O
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
 
,
 
$
t
h
i
s
-
>
q
u
e
r
y
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
-
>
r
e
s
u
l
t
 
!
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
t
h
i
s
-
>
l
a
s
t
_
i
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
i
d
 
=
 
m
y
s
q
l
i
_
i
n
s
e
r
t
_
i
d
(
$
t
h
i
s
-
>
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
i
d
 
=
 
m
y
s
q
l
_
i
n
s
e
r
t
_
i
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
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
P
D
O
-
>
l
a
s
t
I
n
s
e
r
t
I
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
a
s
t
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
s
t
_
i
d
 
=
 
$
l
a
s
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
 
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
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
m
y
s
q
l
i
_
e
r
r
o
r
(
$
t
h
i
s
-
>
l
i
n
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
m
y
s
q
l
_
e
r
r
o
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
$
t
h
i
s
-
>
P
D
O
-
>
e
r
r
o
r
I
n
f
o
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
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
 
&
&
 
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
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
l
o
b
a
l
 
$
w
p
d
b
;

	
	
	

	
	
	
$
q
 
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
#
_
_
'
,
 
"
{
$
w
p
d
b
-
>
p
r
e
f
i
x
}
"
,
 
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
q
u
e
r
y
 
=
 
$
q
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
 
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
#
_
_
'
,
 
$
t
h
i
s
-
>
d
b
_
p
r
e
f
i
x
,
 
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
q
u
e
r
y
 
=
 
$
q
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
 
l
o
a
d
O
b
j
e
c
t
L
i
s
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
q
u
e
r
y
)
 
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
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
 
&
&
 
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
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
l
o
b
a
l
 
$
w
p
d
b
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
$
w
p
d
b
-
>
g
e
t
_
r
e
s
u
l
t
s
(
$
t
h
i
s
-
>
q
u
e
r
y
,
 
O
B
J
E
C
T
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
m
y
s
q
l
i
_
q
u
e
r
y
(
$
t
h
i
s
-
>
l
i
n
k
,
 
$
t
h
i
s
-
>
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
m
y
s
q
l
_
q
u
e
r
y
(
$
t
h
i
s
-
>
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
$
t
h
i
s
-
>
P
D
O
-
>
q
u
e
r
y
(
$
t
h
i
s
-
>
q
u
e
r
y
,
 
P
D
O
:
:
F
E
T
C
H
_
O
B
J
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
P
D
O
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
-
>
s
t
m
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
d
b
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
i
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
r
o
w
 
=
 
m
y
s
q
l
i
_
f
e
t
c
h
_
o
b
j
e
c
t
(
$
t
h
i
s
-
>
s
t
m
t
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
r
e
s
u
l
t
[
]
 
=
 
$
r
o
w
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
i
_
f
r
e
e
_
r
e
s
u
l
t
(
$
t
h
i
s
-
>
s
t
m
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
r
o
w
 
=
 
m
y
s
q
l
_
f
e
t
c
h
_
o
b
j
e
c
t
(
$
t
h
i
s
-
>
s
t
m
t
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
r
e
s
u
l
t
[
]
 
=
 
$
r
o
w
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
y
s
q
l
_
f
r
e
e
_
r
e
s
u
l
t
(
$
t
h
i
s
-
>
s
t
m
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
d
o
m
y
s
q
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
s
u
l
t
 
=
 
$
t
h
i
s
-
>
s
t
m
t
-
>
f
e
t
c
h
A
l
l
(
P
D
O
:
:
F
E
T
C
H
_
O
B
J
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
-
>
c
l
o
s
e
C
u
r
s
o
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
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
 
u
n
s
e
t
R
e
s
u
l
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
m
t
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
w
h
e
r
e
C
a
l
l
e
d
(
)

{

 
 
 
 
$
t
r
a
c
e
 
=
 
d
e
b
u
g
_
b
a
c
k
t
r
a
c
e
(
)
;

 
 
 
 
$
f
i
l
e
1
_
a
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
J
R
D
S
,
 
$
t
r
a
c
e
[
 
2
 
]
[
 
'
f
i
l
e
'
 
]
)
;

 
 
 
 
$
f
i
l
e
1
 
=
 
$
f
i
l
e
1
_
a
r
r
[
 
c
o
u
n
t
(
$
f
i
l
e
1
_
a
r
r
)
 
-
 
1
 
]
;

 
 
 
 
$
f
i
l
e
2
_
a
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
J
R
D
S
,
 
$
t
r
a
c
e
[
 
3
 
]
[
 
'
f
i
l
e
'
 
]
)
;

 
 
 
 
$
f
i
l
e
2
 
=
 
$
f
i
l
e
2
_
a
r
r
[
 
c
o
u
n
t
(
$
f
i
l
e
2
_
a
r
r
)
 
-
 
1
 
]
;


 
 
 
 
r
e
t
u
r
n
 
'
o
n
 
l
i
n
e
 
'
.
$
t
r
a
c
e
[
 
2
 
]
[
 
'
l
i
n
e
'
 
]
.
"
 
o
f
 
 
\
n
(
i
n
 
<
b
>
"
.
$
f
i
l
e
1
.
'
<
/
b
>
)
 
f
o
r
 
l
i
n
e
 
'
.
$
t
r
a
c
e
[
 
3
 
]
[
 
'
l
i
n
e
'
 
]
.
'
 
'
.
$
f
i
l
e
2
;

}

